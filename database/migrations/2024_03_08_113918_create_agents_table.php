<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 25);
            $table->string('nom', 80);
            $table->string('prenom', 80)->nullable();
            $table->string('photo');
            $table->string('telephone', 9)->nullable();
            $table->string('email', 60)->nullable();
            $table->string('fonction', 10)->default('Fonctionnaire');
            // $table->foreignId('service_id',)->nullable()->constrained('detail_referentiels');
            // $table->foreign('service_id')->ferences('id')->on('services')->onDelete('cascade');
            $table->unsignedBigInteger('service_id'); // Crée la colonne 'service_id' comme un entier non signé
            $table->foreign('service_id')->ferences('id')->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};

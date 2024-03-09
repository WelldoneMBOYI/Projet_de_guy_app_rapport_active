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
        Schema::create('intervenants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 80);
            $table->string('prenom', 80)->nullable();
            $table->string('matricule', 25);
            $table->string('titre', 155);
            $table->string('provenance', 155);
            $table->string('phone', 9)->nullable();
            $table->string('email', 60)->nullable();
            $table->string('fonction', 10)->default('Enseignant');
            $table->foreignId('etat_id',)->nullable()->constrained('detail_referentiels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intervenants');
    }
};

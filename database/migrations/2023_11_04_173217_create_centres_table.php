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
        Schema::create('centres', function (Blueprint $table) {
            $table->id();
            $table->string('nom_centre', 155);
            $table->foreignId('province_id',)->nullable()->constrained('detail_referentiels');
            $table->foreignId('commune_id',)->nullable()->constrained('detail_referentiels');
            $table->string('adresse', 155);
            $table->foreignId('etat_id',)->nullable()->constrained('detail_referentiels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centres');
    }
};

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
        Schema::create('arrondissements', function (Blueprint $table) {
            $table->id('idArrondissement');
            $table->unsignedBigInteger('idCommune');
            $table->string('nom');
            $table->timestamps();

            $table->foreign('idCommune')->references('idCommune')->on('communes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrondissements');
    }
};

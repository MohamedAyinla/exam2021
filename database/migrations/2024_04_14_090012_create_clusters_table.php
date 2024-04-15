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
        Schema::create('clusters', function (Blueprint $table) {
            $table->id('idCluster');
            $table->unsignedBigInteger('idFiliere');
            $table->unsignedBigInteger('idVillage');
            $table->string('nom');
            $table->timestamps();

            $table->foreign('idFiliere')->references('idFiliere')->on('filieres');
            $table->foreign('idVillage')->references('idVillage')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clusters');
    }
};

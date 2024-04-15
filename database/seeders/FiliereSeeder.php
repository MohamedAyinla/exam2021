<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Filiere;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Filiere::create([
            "nom" => "Filiere 1",
        ]);

        Filiere::create([
            "nom" => "Filiere 2",
        ]);
    }
}

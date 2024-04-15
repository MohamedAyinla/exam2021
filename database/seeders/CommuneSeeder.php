<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Commune;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Commune::create([
            "nom" => "Commune 1",
            "idDepartement"=> "1",
        ]);

        Commune::create([
            "nom" => "Commune 2",
            "idDepartement" => "2",
        ]);

        Commune::create([
            "nom" => "Commune 3",
            "idDepartement" => "2",
        ]);

        Commune::create([
            "nom" => "Commune 4",
            "idDepartement" => "1",
        ]);

        Commune::create([
            "nom" => "Commune 5",
            "idDepartement" => "1",
        ]);
    }
}

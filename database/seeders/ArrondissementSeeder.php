<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Arrondissement;
use Illuminate\Database\Seeder;

class ArrondissementSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Arrondissement::create([
            "nom" => "Arrondissement 1",
            "idCommune"=> "1",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 2",
            "idCommune" => "2",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 3",
            "idCommune" => "2",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 4",
            "idCommune" => "1",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 5",
            "idCommune" => "1",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 6",
            "idCommune" => "3",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 7",
            "idCommune" => "3",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 8",
            "idCommune" => "4",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 9",
            "idCommune" => "5",
        ]);

        Arrondissement::create([
            "nom" => "Arrondissement 10",
            "idCommune" => "5",
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departement;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Departement::create([
            "nom" => "Departement 1",
        ]);

        Departement::create([
            "nom" => "Departement 2",
        ]);
    }
}

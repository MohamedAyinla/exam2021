<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Village;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Village::create([
            "nom" => "Village 1",
            "idArrondissement"=> "1",
        ]);

        Village::create([
            "nom" => "Village 2",
            "idArrondissement" => "2",
        ]);

        Village::create([
            "nom" => "Village 3",
            "idArrondissement" => "3",
        ]);

        Village::create([
            "nom" => "Village 4",
            "idArrondissement" => "5",
        ]);

        Village::create([
            "nom" => "Village 5",
            "idArrondissement" => "4",
        ]);

        Village::create([
            "nom" => "Village 6",
            "idArrondissement" => "3",
        ]);

        Village::create([
            "nom" => "Village 7",
            "idArrondissement" => "1",
        ]);

        Village::create([
            "nom" => "Village 8",
            "idArrondissement" => "5",
        ]);

        Village::create([
            "nom" => "Village 9",
            "idArrondissement" => "6",
        ]);

        Village::create([
            "nom" => "Village 10",
            "idArrondissement" => "6",
        ]);

        Village::create([
            "nom" => "Village 11",
            "idArrondissement" => "7",
        ]);

        Village::create([
            "nom" => "Village 12",
            "idArrondissement" => "8",
        ]);

        Village::create([
            "nom" => "Village 13",
            "idArrondissement" => "9",
        ]);

        Village::create([
            "nom" => "Village 14",
            "idArrondissement" => "10",
        ]);

        Village::create([
            "nom" => "Village 15",
            "idArrondissement" => "10",
        ]);
    }
}

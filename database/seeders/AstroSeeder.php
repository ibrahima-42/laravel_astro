<?php

namespace Database\Seeders;


use Faker\Factory;
use App\Models\Astro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AstroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Factory::create();
        for($i=0; $i < 10; $i++){
            Astro::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'navete' => $faker->firstName,
                'email' => $faker->email
            ]);
        }
    }
}

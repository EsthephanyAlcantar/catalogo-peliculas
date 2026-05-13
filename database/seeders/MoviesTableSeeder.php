<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Movie::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Models\Movie::create([
                'title' => $faker->sentence,
                'synopsis' => $faker->paragraph,
                'year' => $faker->numberBetween(1980, 2025),
                'cover' => $faker->imageUrl(640, 480, 'movies', true),
            ]);
        }
    }
}

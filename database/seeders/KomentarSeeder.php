<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Komentar::create([
            'nama' => $faker->name,
            'email' => $faker->email,
            'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'artikel_id' => 16
        ]);
        Komentar::create([
            'nama' => $faker->name,
            'email' => $faker->email,
            'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'artikel_id' => 16
        ]);
        Komentar::create([
            'nama' => $faker->name,
            'email' => $faker->email,
            'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'artikel_id' => 17
        ]);
       
    }
}

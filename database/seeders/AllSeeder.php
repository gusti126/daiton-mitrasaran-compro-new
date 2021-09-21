<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        // Kategori::create([
        //     'nama' => 'Corporate Coaching'
        // ]);
        // Kategori::create([
        //     'nama' => 'Coaching Academy'
        // ]);
        // Kategori::create([
        //     'nama' => 'Our Coaching'
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@daitonmitrasarana.co.id',
            'password' => Hash::make("admin2021"),
            'role' => 'superAdmin'
        ]);
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make("password")
            ]);
        }
    }
}

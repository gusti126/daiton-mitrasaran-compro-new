<?php

namespace Database\Seeders;

use App\Models\AboutWebmaster;
use App\Models\HomeWebmaster;
use App\Models\Kategori;
use App\Models\Kontak;
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

        Kategori::create([
            'nama' => 'Corporate Coaching'
        ]);
        Kategori::create([
            'nama' => 'Coaching Academy'
        ]);
        Kategori::create([
            'nama' => 'Our Coaching'
        ]);
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
        // 'header_title', 'header_subtitle', 'alamat', 'kontak', 'email', 'jamkerja'
        HomeWebmaster::create([
            'header_title' => 'Mitra sarana terbaik di Indonesia berdiri sejak 1994. 200+ mitra',
            'header_subtitle' => 'hader subtitle Mitra sarana terbaik di Indonesia berdiri sejak 1994. 200+ mitra',
            'alamat' => 'Jl. Arcadia, Jl. Daan Mogot Blok G18 No 1-3 Km, RT.005/RW.003, Batuceper, Kec. Batuceper, Kota Tangerang, Banten 15122',
            'kontak' => '02110212',
            'email' => 'hub@daitonmitrasarana.co.id',
            'jamkerja' => '13.00 - 15.00'
        ]);

        // 'header_title', 'header_subtitle', 'header_image', 'header_tagline', 'main_satu_title', 'main_satu_subtitle', 
        //'main_satu_image', 'program', 'main_dua_title', 'main_dua_subtitle', 'main_dua_image'
        AboutWebmaster::create([
            'header_title' => 'Dedicated Teams. For Your Dedicated Dreams.',
            'header_subtitle' => 'Dedicated Teams. For Your Dedicated Dreams.',
            'header_image' => 'tes image',
            'header_tagline' => 'Why We Do This A few months ago we designed and developed a website for Storetasker. With the website redesign, we did their branding, visual language, and overall website structure.',
            'main_satu_title' => 'Daiton Mitrasarana',
            'main_satu_subtitle' => 'kita adalah konsultan dan training provieder yang berdiri tahunn 2004 dan sejak tahun 2004 sudah mengadakan lebih dari ribuan kali training, seminar dan pelatihan update tester',
            'main_satu_image' => 'hello',
            'program' => 'We help pre-seed entrepreneurs and teams build get to traction and funding by establishing a critical support network of local startup experts that are invested in their success, and by providing a structured and challenging business-building process that has helped our alumni raise over $1 billion. Leaders of the world’s fastest-growing startups have used the Founder Institute to raise funding, building a co-founding team, get into seed-accelerators, generate traction, recruit a team, build a product, transition from employee to entrepreneur, and more. Learn more about our pre-seed startup accelerator program.',
            'main_dua_title' => 'Executive Coaching: Transforming People & Business',
            'main_dua_subtitle' => 'We help pre-seed entrepreneurs and teams build get to traction and funding by establishing a critical support network of local startup experts that are invested in their success, and by providing a structured and challenging business-building process that',
            'main_dua_image' => 'Executive Coaching: Transforming People & Business',
        ]);

        // 'email', 'wa', 'telepon', 'image', 'ic_email', 'ic_wa', 'ic_telepon', 'header_title', 'header_subtitle'
        Kontak::create([
            'email' => 'edit@email.com',
            'wa' => '628991299829',
            'telepon' => '08991169449',
            'image' => 'edit image',
            'ic_email' => 'edit',
            'ic_wa' => 'edit',
            'ic_telepon' => 'edit',
            'header_title' => 'Were Happy toHelp You Today!',
            'header_subtitle' => 'Hubungi kami melalui salah satu channel yang telah kami sediakan di bawah tes update',

        ]);
    }
}

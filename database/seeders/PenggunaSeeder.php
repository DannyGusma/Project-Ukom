<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PenggunaModel as Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::factory(1)->create([
            "id_level" => 'U01',
            "username" => 'admin',
            "email" => 'admin@gmail.com',
            "password" => Hash::make('admin'),
            "foto" => ''
        ]);

        Pengguna::factory(1)->create([
            "id_level" => 'U02',
            "username" => 'Kepsek',
            "email" => 'kepsek@gmail.com',
            "password" => Hash::make('kepsek'),
            "foto" => ''
        ]);

    }
}

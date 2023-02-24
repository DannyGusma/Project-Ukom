<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PenggunaModel>
 */
class PenggunaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_level" => '',
            "username" => 'admin',
            "email" => 'admin@gmail.com',
            "password" => Hash::make('admin'),
            "foto" => ''
        ];
        return [
            "id_level" => '',
            "username" => 'Kepsek',
            "email" => 'kepsek@gmail.com',
            "password" => Hash::make('kepsek'),
            "foto" => ''
        ];

    }
}

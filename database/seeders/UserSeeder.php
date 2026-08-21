<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert
        (
         [
            'id' => 1,
            'name' => 'Kelompok 2 - XII RPL 2',
            'email' => 'kelompok02@gmail.com',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
         ]
        );
    }
}
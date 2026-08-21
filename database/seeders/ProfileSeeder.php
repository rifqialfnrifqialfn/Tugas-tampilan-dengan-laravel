<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profile')->insert([
            'id' => 1,
            'umur' => 17,
            'bio' => 'Kelompok 2 - XII RPL 2',
            'alamat' => 'SMKN 1 KARAWANG',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
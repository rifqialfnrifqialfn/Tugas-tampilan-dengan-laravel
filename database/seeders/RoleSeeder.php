<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('role')->insert([
            'id' => 1,
            'nama' => 'Kelompok 2 - XII RPL 2',
            'kelas' => 'XII RPL 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
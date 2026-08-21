<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cast')->insert
        (
         [
            'id' => 1,
            'nama' => 'Kelompok 2 - XII RPL 2',
            'umur' => 17,
            'bio' => 'Kelompok KPW - XII RPL 2.',
            'created_at' => now(),
            'updated_at' => now(),
         ]
        );
    }
}
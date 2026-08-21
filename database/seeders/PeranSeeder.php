<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('peran')->insert
        (
         [
            'id' => 1,
            'film_id' => 1,
            'cast_id' => 1,
            'nama' => 'Peter Parker',
            'created_at' => now(),
            'updated_at' => now(),
         ]
        );
    }
}
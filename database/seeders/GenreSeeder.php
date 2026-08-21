<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genre')->insert
        (
         [
            ['id' => 1, 'nama' => 'Action', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nama' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
         ]
        );
    }
}
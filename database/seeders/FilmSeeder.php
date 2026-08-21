<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('film')->insert
        (
         [
            'id' => 1,
            'judul' => 'Spiderman: Brand New Day',
            'ringkasan' => 'Kisah Spiderman (Peter Parker)',
            'tahun' => 2026,
            'poster' => 'poster_spiderman.jpg',
            'genre_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
         ]
        );
    }
}
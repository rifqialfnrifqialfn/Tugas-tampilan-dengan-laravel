<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KritikSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kritik')->insert
        (
         [
            'id' => 1,
            'user_id' => 1,
            'film_id' => 1,
            'content' => 'Film yang sangat bagus sinematografinya',
            'point' => 5,
            'created_at' => now(),
            'updated_at' => now(),
         ]
        );
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'name' => 'Drama',
            ],
            [
                'id' => 2,
                'name' => 'Kids',
            ],
            [
                'id' => 3,
                'name' => 'TV Show',
            ],
        ]);
    }
}

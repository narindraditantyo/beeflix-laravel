<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            GenreTableSeeder::class,
            MovieTableSeeder::class,
            EpisodeTableSeeder::class,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('movies')->insert([
            [
                'id' => 1,
                'genre_id' => 3,
                'title' => 'Top Gear',
                'photo' => 'top-gear.jpg',
                'description' => 'The hosts talk about everything car-related. From new cars to how they\'re fueled, this show has it all.',
                'rating' => 4
            ],
            [
                'id' => 2,
                'genre_id' => 3,
                'title' => 'Hell\'s Kitchen',
                'photo' => 'hells-kitchen.jpg',
                'description' => 'World renowned chef Gordon Ramsay puts aspiring young chefs through rigorous cooking challenges and dinner services at his restaurant in Hollywood, "Hell\'s Kitchen".',
                'rating' => 3
            ],
            [
                'id' => 3,
                'genre_id' => 3,
                'title' => 'The Amazing Race',
                'photo' => 'amazing-race.jpg',
                'description' => 'Multiple teams race around the globe for $1,000,000 to \'amazing\' locations.',
                'rating' => 4
            ],
            [
                'id' => 4,
                'genre_id' => 3,
                'title' => 'The Voice',
                'photo' => 'the-voice.jpg',
                'description' => 'Four famous musicians search for the best voices in America and will mentor these singers to become artists. America will decide which singer will be worthy of the grand prize.',
                'rating' => 3
            ],
            [
                'id' => 5,
                'genre_id' => 1,
                'title' => 'The Queen\'s Gambit',
                'photo' => 'queens-gambit.jpg',
                'description' => 'Orphaned at 9, prodigious introvert Beth Harmon discovers and masters the game of chess in 1960s USA. But, child stardom comes at a price.',
                'rating' => 5
            ],
            [
                'id' => 6,
                'genre_id' => 1,
                'title' => 'Grey\'s Anatomy',
                'photo' => 'greys-anatomy.jpg',
                'description' => 'A drama centered on the personal and professional lives of five surgical interns and their supervisors.',
                'rating' => 3
            ],
            [
                'id' => 7,
                'genre_id' => 1,
                'title' => 'Emily in Paris',
                'photo' => 'emily-in-paris.jpg',
                'description' => 'A young American woman from the Midwest is hired by a marketing firm in Paris to provide them with an American perspective on things.',
                'rating' => 3
            ],
            [
                'id' => 8,
                'genre_id' => 1,
                'title' => 'Cobra Kai',
                'photo' => 'cobra-kai.jpg',
                'description' => 'Decades after their 1984 All Valley Karate Tournament bout, a middle-aged Daniel LaRusso and Johnny Lawrence find themselves martial-arts rivals again.',
                'rating' => 4
            ],
            [
                'id' => 9,
                'genre_id' => 2,
                'title' => 'Avatar: The Last Airbender',
                'photo' => 'avatar.jpg',
                'description' => 'In a war-torn world of elemental magic, a young boy reawakens to undertake a dangerous mystic quest to fulfill his destiny as the Avatar, and bring peace to the world.',
                'rating' => 5
            ],
            [
                'id' => 10,
                'genre_id' => 2,
                'title' => 'Naruto: Shippuden',
                'photo' => 'naruto.jpg',
                'description' => 'Naruto Uzumaki, is a loud, hyperactive, adolescent ninja who constantly searches for approval and recognition, as well as to become Hokage, who is acknowledged as the leader and strongest of all ninja in the village.',
                'rating' => 4
            ],
            [
                'id' => 11,
                'genre_id' => 2,
                'title' => 'SpongeBob SquarePants',
                'photo' => 'spongebob.jpg',
                'description' => 'The misadventures of a talking sea sponge who works at a fast food restaurant, attends a boating school, and lives in an underwater pineapple.',
                'rating' => 4
            ],
            [
                'id' => 12,
                'genre_id' => 2,
                'title' => 'Gravity Falls',
                'photo' => 'gravity-falls.jpg',
                'description' => 'Twin siblings Dipper and Mabel Pines spend the summer at their great-uncle\'s tourist trap in the enigmatic Gravity Falls, Oregon.',
                'rating' => 4
            ],
        ]);
    }
}

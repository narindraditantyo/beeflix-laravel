<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('episodes')->insert([
            [
                'movie_id' => 1,
                'episode' => 'S1:E1',
                'title' => 'The Legacy Begins',
            ],
            [
                'movie_id' => 1,
                'episode' => 'S1:E2',
                'title' => 'Bus Jumps Over Motorbikes',
            ],
            [
                'movie_id' => 1,
                'episode' => 'S1:E3',
                'title' => 'Grannies Doing Doughnuts',
            ],
            [
                'movie_id' => 1,
                'episode' => 'S1:E4',
                'title' => 'Clarkson Drives the Aston Martin Vanquish',
            ],
            [
                'movie_id' => 2,
                'episode' => 'S1:E1',
                'title' => 'Day 1',
            ],
            [
                'movie_id' => 2,
                'episode' => 'S1:E2',
                'title' => 'Day 2',
            ],
            [
                'movie_id' => 2,
                'episode' => 'S1:E3',
                'title' => 'Day 3',
            ],
            [
                'movie_id' => 2,
                'episode' => 'S1:E4',
                'title' => 'Day 4',
            ],
            [
                'movie_id' => 3,
                'episode' => 'S1:E1',
                'title' => 'The Race Begins',
            ],
            [
                'movie_id' => 3,
                'episode' => 'S1:E2',
                'title' => 'Divide and Conquer',
            ],
            [
                'movie_id' => 3,
                'episode' => 'S1:E3',
                'title' => 'Home for Some',
            ],
            [
                'movie_id' => 3,
                'episode' => 'S1:E4',
                'title' => 'Colossal Showdown',
            ],
            [
                'movie_id' => 4,
                'episode' => 'S1:E1',
                'title' => 'Blind Auditions, Part 1',
            ],
            [
                'movie_id' => 4,
                'episode' => 'S1:E2',
                'title' => 'Blind Auditions, Part 2',
            ],
            [
                'movie_id' => 4,
                'episode' => 'S1:E3',
                'title' => 'The Battles, Part 1',
            ],
            [
                'movie_id' => 4,
                'episode' => 'S1:E4',
                'title' => 'The Battles, Part 2',
            ],
            [
                'movie_id' => 4,
                'episode' => 'S1:E5',
                'title' => 'The Battles, Part 3',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E1',
                'title' => 'Openings',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E2',
                'title' => 'Exchanges',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E3',
                'title' => 'Doubled Pawns',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E4',
                'title' => 'Middle Game',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E5',
                'title' => 'Fork',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E6',
                'title' => 'Adjournment',
            ],
            [
                'movie_id' => 5,
                'episode' => 'S1:E7',
                'title' => 'End Game',
            ],
            [
                'movie_id' => 6,
                'episode' => 'S1:E1',
                'title' => 'A Hard Day\'s Night',
            ],
            [
                'movie_id' => 6,
                'episode' => 'S1:E2',
                'title' => 'The First Cut is the Deepest',
            ],
            [
                'movie_id' => 6,
                'episode' => 'S1:E3',
                'title' => 'Winning a Battle, Losing a War',
            ],
            [
                'movie_id' => 6,
                'episode' => 'S1:E4',
                'title' => 'No Man\'s Land',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E1',
                'title' => 'Emily in Paris',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E2',
                'title' => 'Masculin Feminin',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E3',
                'title' => 'Sexy or Sexist',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E4',
                'title' => 'A Kiss is Just a Kiss',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E5',
                'title' => 'Faux Amis',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E6',
                'title' => 'Ringarde',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E7',
                'title' => 'French Ending',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E8',
                'title' => 'Family Affair',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E9',
                'title' => 'An American Auction in Paris',
            ],
            [
                'movie_id' => 7,
                'episode' => 'S1:E10',
                'title' => 'Cancel Couture',
            ],
            [
                'movie_id' => 8,
                'episode' => 'S1:E1',
                'title' => 'Ace Degenerate',
            ],
            [
                'movie_id' => 8,
                'episode' => 'S1:E2',
                'title' => 'Cobra Kai Never Dies',
            ],
            [
                'movie_id' => 8,
                'episode' => 'S1:E3',
                'title' => 'Esqueleto',
            ],
            [
                'movie_id' => 8,
                'episode' => 'S1:E4',
                'title' => 'Strike First',
            ],
            [
                'movie_id' => 9,
                'episode' => 'S1:E1',
                'title' => 'Avatar: The Last Airbender',
            ],
            [
                'movie_id' => 9,
                'episode' => 'S1:E2',
                'title' => 'The Boy in the Iceberg',
            ],
            [
                'movie_id' => 9,
                'episode' => 'S1:E3',
                'title' => 'The Avatar Returns',
            ],
            [
                'movie_id' => 9,
                'episode' => 'S1:E4',
                'title' => 'The Southern Air Temple',
            ],
            [
                'movie_id' => 10,
                'episode' => 'S1:E1',
                'title' => 'Akatsuki, Shido',
            ],
            [
                'movie_id' => 10,
                'episode' => 'S1:E2',
                'title' => 'Kikyo',
            ],
            [
                'movie_id' => 10,
                'episode' => 'S1:E3',
                'title' => 'Shugyo no Seika',
            ],
            [
                'movie_id' => 10,
                'episode' => 'S1:E4',
                'title' => 'Suna no Jinchuriki',
            ],
            [
                'movie_id' => 11,
                'episode' => 'S1:E1',
                'title' => 'Help Wanted',
            ],
            [
                'movie_id' => 11,
                'episode' => 'S1:E2',
                'title' => 'BubbleStand',
            ],
            [
                'movie_id' => 11,
                'episode' => 'S1:E3',
                'title' => 'Jellyfishing',
            ],
            [
                'movie_id' => 11,
                'episode' => 'S1:E4',
                'title' => 'Naughty Nautical Neighbors',
            ],
            [
                'movie_id' => 12,
                'episode' => 'S1:E1',
                'title' => 'Tourist Trapped',
            ],
            [
                'movie_id' => 12,
                'episode' => 'S1:E2',
                'title' => 'The Legend of the Gobblewonker',
            ],
            [
                'movie_id' => 12,
                'episode' => 'S1:E3',
                'title' => 'Headhunters',
            ],
            [
                'movie_id' => 12,
                'episode' => 'S1:E4',
                'title' => 'Dipper vs. Manliness',
            ],
        ]);
    }
}

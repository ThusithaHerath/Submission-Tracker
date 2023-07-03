<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher_rating;

class PublisherRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = [
            [
                'publisher_rating_name' => 'TopTier',
                'publisher_rating_rank' => 1,
            ],
            [
                'publisher_rating_name' => 'MidTier',
                'publisher_rating_rank' => 2,
            ],
            [
                'publisher_rating_name' => 'LowTier',
                'publisher_rating_rank' => 3,
            ]
            // Add more ratings as needed
        ];

        foreach ($ratings as $rating) {
            Publisher_rating::create($rating);
        }
    }
}

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
                'publisherRatingName' => 'TopTier',
                'publisherRatingRank' => 1,
            ],
            [
                'publisherRatingName' => 'MidTier',
                'publisherRatingRank' => 2,
            ],
            [
                'publisherRatingName' => 'LowTier',
                'publisherRatingRank' => 3,
            ]
            // Add more ratings as needed
        ];

        foreach ($ratings as $rating) {
            Publisher_rating::create($rating);
        }
    }
}

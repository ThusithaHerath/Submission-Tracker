<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\story_type_default;

class StoryTypeDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'StoryTypeName' => 'Article',
            ],
            [
                'StoryTypeName' => 'Book',
            ],
            [
                'StoryTypeName' => 'BookReview',
            ],
            [
                'StoryTypeName' => 'Essay',
            ],
            [
                'StoryTypeName' => 'PoemRhyming',
            ],
            [
                'StoryTypeName' => 'PoemNonRhyming',
            ],
            [
                'StoryTypeName' => 'ShortStory',
            ],
            [
                'StoryTypeName' => 'Song',
            ]
        ];

        foreach ($types as $type) {
            story_type_default::create($type);
        }
    }
}

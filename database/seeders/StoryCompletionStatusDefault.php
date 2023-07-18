<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\story_completion_status_default;

class StoryCompletionStatusDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'StoryCompletionStatusName' => 'Not Started',
            ],
            [
                'StoryCompletionStatusName' => 'Part Draft',
            ],
            [
                'StoryCompletionStatusName' => 'Full Draft',
            ],
            [
                'StoryCompletionStatusName' => 'Pending Edit',
            ],
            [
                'StoryCompletionStatusName' => 'Complete',
            ]
        ];

        foreach ($status as $status) {
            story_completion_status_default::create($status);
        }
    }
}

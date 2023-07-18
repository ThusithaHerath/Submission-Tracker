<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PublisherRatingSeeder::class);
        $this->call(PublisherRatingDefaults::class);
        $this->call(PublisherTypeDefaults::class);
        $this->call(SubmissionStatusDefault::class);
        $this->call(SubmissionMethodDefault::class);
        $this->call(StoryTypeDefault::class);
        $this->call(StoryCompletionStatusDefault::class);
    }
}

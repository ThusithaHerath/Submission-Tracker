<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\submission_status_default;

class SubmissionStatusDefault extends Seeder
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
                'SubmissionStatusName' => 'Submitted',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Accepted',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Resubmitted',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Published',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Rejected',
                'SubmissionStatusLocksStory' => False,
            ],
            [
                'SubmissionStatusName' => 'Request Revision',
                'SubmissionStatusLocksStory' => False,
            ],
            [
                'SubmissionStatusName' => 'Withdrawn',
                'SubmissionStatusLocksStory' => False,
            ],
            [
                'SubmissionStatusName' => 'Winner & Publication',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Winner No Publication',
                'SubmissionStatusLocksStory' => False,
            ],
            [
                'SubmissionStatusName' => 'Honorable Mention & Publication',
                'SubmissionStatusLocksStory' => True,
            ],
            [
                'SubmissionStatusName' => 'Honorable Mention No Publication ',
                'SubmissionStatusLocksStory' => False,
            ]
            // Add more ratings as needed
        ];

        foreach ($status as $status) {
            submission_status_default::create($status);
        }
    }
}

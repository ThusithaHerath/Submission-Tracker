<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\submission_method_default;

class SubmissionMethodDefault extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = [
            [
                'SubmissionMethodName' => 'PublisherWebsite',
            ],
            [
                'SubmissionMethodName' => 'Submissions.com'
            ],
            [
                'SubmissionMethodName' => 'Email',
            ],
            [
                'SubmissionMethodName' => 'Mail',
            ],
            [
                'SubmissionMethodName' => 'Fax',
            ]
        ];

        foreach ($methods as $method) {
            submission_method_default::create($method);
        }
    }
}

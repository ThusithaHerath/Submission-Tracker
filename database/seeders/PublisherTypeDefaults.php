<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\publisher_type_default;

class PublisherTypeDefaults extends Seeder
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
                'PublisherTypeName' => 'Contest',
            ],
            [
                'PublisherTypeName' => 'Book',
            ],
            [
                'PublisherTypeName' => 'Periodical',
            ],
            [
                'PublisherTypeName' => 'Blog',
            ],
            [
                'PublisherTypeName' => 'Zine',
            ]
        ];

        foreach ($types as $type) {
            publisher_type_default::create($type);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => "PHP"
            ],
            [
                'id' => 2,
                'name' => "Laravel"
            ],
            [
                'id' => 3,
                'name' => "NextJS"
            ],
            [
                'id' => 4,
                'name' => "ReactJS"
            ],
            [
                'id' => 5,
                'name' => "VueJS"
            ],
        ];

        foreach($categories as $data)
        {
            Category::create($data);
        }
    }
}

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
                'name' => "PHP"
            ],
            [
                'name' => "Laravel"
            ],
            [
                'name' => "NextJS"
            ],
            [
                'name' => "ReactJS"
            ],
            [
                'name' => "VueJS"
            ],
        ];

        foreach($categories as $data)
        {
            Category::create($data);
        }
    }
}

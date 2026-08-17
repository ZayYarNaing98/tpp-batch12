<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name' => "Instructor 1",
                'email' => "instructor1@example.com",
                'phone' => "09111111111"
            ],
            [
                'name' => "Instructor 2",
                'email' => "instructor2@example.com",
                'phone' => "09222222222"
            ],
            [
                'name' => "Instructor 3",
                'email' => "instructor3@example.com",
                'phone' => "09333333333"
            ],
        ];

        foreach ($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}

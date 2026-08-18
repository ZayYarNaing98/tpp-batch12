<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => "Student 1",
                'email' => "student1@example.com",
                'phone' => "09411111111"
            ],
            [
                'name' => "Student 2",
                'email' => "student2@example.com",
                'phone' => "09422222222"
            ],
            [
                'name' => "Student 3",
                'email' => "student3@example.com",
                'phone' => "09433333333"
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}

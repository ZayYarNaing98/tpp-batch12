<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructor = User::create([
            'name' => "KyawKyaw",
            'email' => "kyaw@mail.com",
            'password' => Hash::make('password'),
        ]);

        $student = User::create([
            'name' => "koko",
            'email' => "koko@mail.com",
            'password' => Hash::make('password'),
        ]);

        $instructor->assignRole('Instructor');
        $student->assignRole('Student');
    }
}

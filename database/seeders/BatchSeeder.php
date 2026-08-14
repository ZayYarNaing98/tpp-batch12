<?php

namespace Database\Seeders;

use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batches = [
            [
                'name' => "Batch 1",
                'description' => "This is the first batch."
            ],
            [
                'name' => "Batch 2",
                'description' => "This is the second batch."
            ],
            [
                'name' => "Batch 3",
                'description' => "This is the third batch."
            ],
        ];

        foreach ($batches as $batch) {
            Batch::create($batch);
        }
    }
}

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
                'description' => "This is the first batch.",
                'start_date' => "2026-01-06",
                'end_date' => "2026-04-06",
                'status' => "complete"
            ],
            [
                'name' => "Batch 2",
                'description' => "This is the second batch.",
                'start_date' => "2026-06-01",
                'end_date' => "2026-09-01",
                'status' => "ongoing"
            ],
            [
                'name' => "Batch 3",
                'description' => "This is the third batch.",
                'start_date' => "2026-10-05",
                'end_date' => "2027-01-05",
                'status' => "upcoming"
            ],
        ];

        foreach ($batches as $batch) {
            Batch::create($batch);
        }
    }
}

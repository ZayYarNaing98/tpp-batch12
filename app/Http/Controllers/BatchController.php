<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = [
            [
                'id' => 1,
                'name' => "Batch 1",
                'description' => "This is the first batch."
            ],
            [
                'id' => 2,
                'name' => "Batch 2",
                'description' => "This is the second batch."
            ],
            [
                'id' => 3,
                'name' => "Batch 3",
                'description' => "This is the third batch."
            ],
        ];

        return view('batches.index', compact('batches'));
    }
}

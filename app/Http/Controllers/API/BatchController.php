<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchController extends BaseController
{
    public function index()
    {
        $batches = Batch::get();

        return $this->success($batches, "Batch Retrieved Successfully", 200);
    }

    public function show($id)
    {
        $batch = Batch::find($id);

        return $this->success($batch, "Batch Show Successfully", 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date|date_format:Y-m-d',
            'end_date' => 'required|date|date_format:Y-m-d',
            'status' => 'required|in:upcoming,ongoing,complete'
        ]);

        if($validator->fails())
        {
            return $this->error("Validation Errors", $validator->errors(), 422);
        }

        $batch = Batch::create($request->all());

        return $this->success($batch, "Batch Created Succssfully", 201);
    }
}

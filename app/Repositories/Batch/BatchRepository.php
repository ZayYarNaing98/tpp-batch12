<?php

namespace App\Repositories\Batch;

use App\Models\Batch;

class BatchRepository implements BatchRepositoryInterface
{
    public function index()
    {
        return Batch::all();
    }

    public function store($data)
    {
        return Batch::create($data);
    }

    public function show($id)
    {
        return Batch::find($id);
    }
}

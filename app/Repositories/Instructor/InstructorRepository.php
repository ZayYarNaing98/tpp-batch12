<?php

namespace App\Repositories\Instructor;

use App\Models\Instructor;

class InstructorRepository implements InstructorRepositoryInterface
{
    public function index()
    {
        return Instructor::all();
    }

    public function store($data)
    {
        return Instructor::create($data);
    }

    public function show($id)
    {
        return Instructor::find($id);
    }
}

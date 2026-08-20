<?php

namespace App\Repositories\Student;

use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function index()
    {
        return Student::with('batch')->get();
    }

    public function store($data)
    {
        return Student::create($data);
    }

    public function show($id)
    {
        return Student::find($id);
    }
}

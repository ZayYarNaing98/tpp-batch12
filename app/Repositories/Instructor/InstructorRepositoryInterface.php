<?php

namespace App\Repositories\Instructor;

interface InstructorRepositoryInterface
{
    public function index();

    public function store($data);

    public function show($id);
}

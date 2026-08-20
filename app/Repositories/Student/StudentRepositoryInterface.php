<?php

namespace App\Repositories\Student;

interface StudentRepositoryInterface
{
    public function index();

    public function store($data);

    public function show($id);
}

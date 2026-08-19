<?php

namespace App\Repositories\Batch;

interface BatchRepositoryInterface
{
    public function index();

    public function store($data);

    public function show($id);
}

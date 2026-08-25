<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function index();

    public function store($data, $role = null);

    public function show($id);

    public function update($id, $data, $role = null);

    public function delete($id);
}

<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function index()
    {
        $users = User::with('roles')->get();

        return $users;
    }

    public function store($data, $role = null)
    {
        $user = User::create($data);

        $user->syncRoles($role ? [$role] : []);

        return $user;
    }

    public function show($id)
    {
        return User::with('roles')->find($id);
    }

    public function update($id, $data, $role = null)
    {
        $user = User::find($id);

        $user->update($data);

        $user->syncRoles($role ? [$role] : []);

        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);

        return $user->delete();
    }
}

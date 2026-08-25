<?php

namespace App\Repositories\Role;

use App\Repositories\Role\RoleRepositoryInterface;
use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    public function index()
    {
        $roles = Role::with('permissions')->get();

        return $roles;
    }

    public function store($data, $permissions = [])
    {
        $role = Role::create($data);

        $role->syncPermissions($permissions);

        return $role;
    }

    public function show($id)
    {
        return Role::with('permissions')->find($id);
    }

    public function update($id, $data, $permissions = [])
    {
        $role = Role::find($id);

        $role->update($data);

        $role->syncPermissions($permissions);

        return $role;
    }

    public function delete($id)
    {
        $role = Role::find($id);

        return $role->delete();
    }
}

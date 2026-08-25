<?php

namespace App\Repositories\Permission;

use App\Repositories\Permission\PermissionRepositoryInterface;
use Spatie\Permission\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function index()
    {
        $permissions = Permission::all();

        return $permissions;
    }

    public function store($data)
    {
        return Permission::create($data);
    }

    public function show($id)
    {
        return Permission::find($id);
    }

    public function update($id, $data)
    {
        $permission = Permission::find($id);

        $permission->update($data);

        return $permission;
    }

    public function delete($id)
    {
        $permission = Permission::find($id);

        return $permission->delete();
    }
}

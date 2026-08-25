<?php

namespace App\Http\Controllers;

use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Role\RoleRepositoryInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleRepository;
    protected $permissionRepository;

    public function __construct(
        RoleRepositoryInterface $roleRepository,
        PermissionRepositoryInterface $permissionRepository
    ) {
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function index()
    {
        $roles = $this->roleRepository->index();

        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $this->permissionRepository->index();

        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        $this->roleRepository->store(
            ['name' => $request->name],
            $request->input('permissions', [])
        );

        return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        $role = $this->roleRepository->show($id);
        $permissions = $this->permissionRepository->index();

        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id,
        ]);

        $this->roleRepository->update(
            $id,
            ['name' => $request->name],
            $request->input('permissions', [])
        );

        return redirect()->route('roles.index');
    }

    public function delete($id)
    {
        $this->roleRepository->delete($id);

        return redirect()->route('roles.index');
    }
}

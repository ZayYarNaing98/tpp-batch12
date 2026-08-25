<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    protected $roleRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
        RoleRepositoryInterface $roleRepository
    ) {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        $users = $this->userRepository->index();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = $this->roleRepository->index();

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'nullable|exists:roles,name',
        ]);

        $this->userRepository->store([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ], $request->role);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = $this->userRepository->show($id);
        $roles = $this->roleRepository->index();

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $this->userRepository->update($id, $data, $request->role);

        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);

        return redirect()->route('users.index');
    }
}

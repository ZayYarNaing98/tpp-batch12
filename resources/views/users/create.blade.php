@extends('layouts.app')
@section('title', 'Create User')
@section('content')
    <h2 class="my-4">Create New User</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">User Name :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Enter User Name" class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Enter Email" class="form-control" />
                    @error('email')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password"
                        class="form-control" />
                    @error('password')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password :</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Confirm Password" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role :</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">-- No Role --</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ old('role') == $role->name ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    + Create
                </button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

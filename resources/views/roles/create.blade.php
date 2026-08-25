@extends('layouts.app')
@section('title', 'Create Role')
@section('content')
    <h2 class="my-4">Create New Role</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Role Name :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Enter Role Name" class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Permissions :</label>
                    @forelse ($permissions as $permission)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="permission{{ $permission->id }}"
                                name="permissions[]" value="{{ $permission->name }}"
                                {{ in_array($permission->name, old('permissions', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="permission{{ $permission->id }}">
                                {{ $permission->name }}
                            </label>
                        </div>
                    @empty
                        <p class="text-muted">No permission found. Please create permission first.</p>
                    @endforelse
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    + Create
                </button>
                <a href="{{ route('roles.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Edit Permission')
@section('content')
    <h2 class="my-4">Edit Permission</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', [$permission->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Permission Name :</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $permission->name) }}"
                        class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">
                    Update
                </button>
                <a href="{{ route('permissions.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

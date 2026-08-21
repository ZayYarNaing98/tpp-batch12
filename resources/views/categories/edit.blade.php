@extends('layouts.app')
@section('content')
    <h2 class="my-4">Edit Your Category</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', [$category->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name:</label>
                    <input type="text" value="{{ $category->name }}" name="name" class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm me-2">
                    Update
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

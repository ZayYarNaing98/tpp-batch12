@extends('layouts.app')
@section('content')
    <h2 class="my-4">Instructor Edit</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('instructors.update', [$instructor->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Instructor Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $instructor->name) }}"
                        class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" id="email" name="email" value="{{ old('email', $instructor->email) }}"
                        class="form-control" />
                    @error('email')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $instructor->phone) }}"
                        class="form-control" />
                    @error('phone')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm me-2">
                    Update
                </button>
                <a href="{{ route('instructors.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

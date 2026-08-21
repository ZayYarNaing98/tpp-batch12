@extends('layouts.app')
@section('content')
    <h2 class="my-4">Create New Student</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="batch_id">Batch</label>
                    <select name="batch_id" id="batch_id" class="form-control">
                        @foreach ($batches as $batch)
                            <option value="{{ $batch->id }}">
                                {{ $batch->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Student Name :</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Enter Student Name" class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}"
                        placeholder="Enter Email" class="form-control" />
                    @error('email')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone :</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                        placeholder="Enter Phone" class="form-control" />
                    @error('phone')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm me-2">
                    + Create
                </button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

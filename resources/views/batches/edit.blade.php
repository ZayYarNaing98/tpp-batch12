@extends('layouts.app')
@section('content')
    <h2 class="my-4">Batch Edit</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('batches.update', [$batch->id]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Batch Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $batch->name) }}"
                        class="form-control" />
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" id="description" name="description"
                        value="{{ old('description', $batch->description) }}" class="form-control" />
                    @error('description')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" id="start_date" name="start_date"
                        value="{{ old('start_date', $batch->start_date) }}" class="form-control" />
                    @error('start_date')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $batch->end_date) }}"
                        class="form-control" />
                    @error('end_date')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="upcoming" @selected(old('status', $batch->status) == 'upcoming')>Upcoming</option>
                        <option value="ongoing" @selected(old('status', $batch->status) == 'ongoing')>Ongoing</option>
                        <option value="complete" @selected(old('status', $batch->status) == 'complete')>Complete</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm me-2">
                    Update
                </button>
                <a href="{{ route('batches.index') }}" class="btn btn-secondary btn-sm">Back</a>
            </form>
        </div>
    </div>
@endsection

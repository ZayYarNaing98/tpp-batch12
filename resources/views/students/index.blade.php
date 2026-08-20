@extends('layouts.app')
@section('content')
    <h2 class="my-4">Student List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success btn-sm mb-2">+ Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>Batch</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PHONE</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->batch->name ?? null }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td class="d-flex">
                        <a href="{{ route('students.edit', ['id' => $data->id]) }}"
                            class="btn btn-secondary btn-sm me-2">Edit</a>
                        <form action="{{ route('students.delete', [$data->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

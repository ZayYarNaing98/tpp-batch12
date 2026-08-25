@extends('layouts.app')
@section('title', 'Permissions')
@section('content')
    <h2 class="my-4">Permission List</h2>
    <a href="{{ route('permissions.create') }}" class="btn btn-success btn-sm mb-2">+ Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>NAME</td>
                <td>GUARD</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->guard_name }}</td>
                    <td class="d-flex">
                        <a href="{{ route('permissions.edit', ['id' => $data->id]) }}"
                            class="btn btn-secondary btn-sm me-2">Edit</a>
                        <form action="{{ route('permissions.delete', [$data->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

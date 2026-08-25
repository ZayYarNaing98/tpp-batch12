@extends('layouts.app')
@section('title', 'Roles')
@section('content')
    <h2 class="my-4">Role List</h2>
    <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm mb-2">+ Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>NAME</td>
                <td>PERMISSIONS</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @forelse ($data->permissions as $permission)
                            <span class="badge bg-success me-1">{{ $permission->name }}</span>
                        @empty
                            -
                        @endforelse
                    </td>
                    <td class="d-flex">
                        <a href="{{ route('roles.edit', ['id' => $data->id]) }}"
                            class="btn btn-secondary btn-sm me-2">Edit</a>
                        <form action="{{ route('roles.delete', [$data->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

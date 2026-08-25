@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <h2 class="my-4">User List</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success btn-sm mb-2">+ Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>ROLE</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        @forelse ($data->roles as $role)
                            <span class="badge bg-success me-1">{{ $role->name }}</span>
                        @empty
                            -
                        @endforelse
                    </td>
                    <td class="d-flex">
                        <a href="{{ route('users.edit', ['id' => $data->id]) }}"
                            class="btn btn-secondary btn-sm me-2">Edit</a>
                        <form action="{{ route('users.delete', [$data->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

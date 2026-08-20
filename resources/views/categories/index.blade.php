@extends('layouts.app')
@section('content')
    <h2 class="my-4">Category List</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm mb-2">+ Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>#</td>
                <td>NAME</td>
                <td>IMAGE</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @if ($data->image)
                            <img src="{{ asset('categoryImages/' . $data->image) }}" alt="{{ $data->name }}"
                                style="width: 50; height: 50px;">
                        @else
                            -
                        @endif
                    </td>
                    <td class="d-flex">
                        <a href="{{ route('categories.edit', ['id' => $data->id]) }}"
                            class="btn btn-secondary btn-sm me-2">Edit</a>
                        <form action="{{ route('categories.delete', [$data->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

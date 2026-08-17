<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Instructor List</h2>
        <a href="{{ route('instructors.create') }}">+Create</a>
        @foreach ($instructors as $data)
            <h3>{{ $data['id'] }} : {{ $data['name'] }}</h3>
            <p>{{ $data['email'] }} - {{ $data['phone'] }}</p>
            <a href="{{ route('instructors.edit', ['id' => $data->id]) }}">Edit</a>
            <form action="{{ route('instructors.delete', [$data->id]) }}" method="POST">
                @csrf
                <button type="submit">Delete</button>
            </form>
        @endforeach

    </div>
</body>
</html>

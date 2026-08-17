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
        <h2>Instructor Edit</h2>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('instructors.update', [$instructor->id]) }}" method="POST">
            @csrf
            <label for="name">Instructor Name:</label>
            <input type="text" value="{{ $instructor->name }}" name="name"/>
            <label for="email">Email:</label>
            <input type="text" value="{{ $instructor->email }}" name="email"/>
            <label for="phone">Phone:</label>
            <input type="text" value="{{ $instructor->phone }}" name="phone"/>
            <button type="submit">
                Update
            </button>
        </form>
    </div>
</body>
</html>

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
        <h2>Instructor Create</h2>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('instructors.store') }}" method="POST">
            @csrf
            <label for="name">Instructor Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Instructor Name"/>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter Email"/>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="Enter Phone"/>
            <button type="submit">
                + Create
            </button>
        </form>

    </div>
</body>
</html>

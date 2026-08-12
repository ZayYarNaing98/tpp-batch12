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
        <h2>Category List</h2>
        @foreach ($categories as $data)
            <h3>{{ $data['id'] }} : {{ $data['name'] }}</h3>

        @endforeach

    </div>
</body>
</html>

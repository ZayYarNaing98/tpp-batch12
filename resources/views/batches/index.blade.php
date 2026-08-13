<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Batches</h1>
    <ul>
        @foreach ($batches as $batch)
            <li>
                <h2>{{ $batch['name'] }}</h2>
                <p>{{ $batch['description'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>

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
        <h2>Batch Edit</h2>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('batches.update', [$batch->id]) }}" method="POST">
            @csrf
            <label for="name">Batch Name:</label>
            <input type="text" value="{{ $batch->name }}" name="name"/>
            <label for="description">Description:</label>
            <input type="text" value="{{ $batch->description }}" name="description"/>
            <button type="submit">
                Update
            </button>
        </form>
    </div>
</body>
</html>

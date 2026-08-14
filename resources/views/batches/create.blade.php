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
        <h2>Batch Create</h2>
        <form action="{{route('batches.store')}}" method="POST">
            @csrf
            <label for="name">Batch Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter Batch Name"/>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" placeholder="Enter Description"/>
            <button type="submit">
                + Create
            </button>
        </form>
    </div>
</body>
</html>

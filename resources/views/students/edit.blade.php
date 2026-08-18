<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Student Edit</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('students.update', [$student->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name:</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}"
                            class="form-control" />
                        @error('name')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" id="email" name="email" value="{{ old('email', $student->email) }}"
                            class="form-control" />
                        @error('email')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}"
                            class="form-control" />
                        @error('phone')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2">
                        Update
                    </button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous">
    </script>
</body>

</html>

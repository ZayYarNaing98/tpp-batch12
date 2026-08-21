@extends('layouts.app')
@section('content')
    <div class="alert alert-primary" role="alert">
        We've {{$totalBatches}} batches.
    </div>
    <div class="alert alert-secondary" role="alert">
        We've {{$totalInstructor}} instructors teaching now.
    </div>

    <div class="alert alert-info" role="alert">
        Currently {{$totalStudents}} students are learning now.
    </div>
@endsection

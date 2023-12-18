<!-- resources/views/my_learning.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}">
    <title>My Learning</title>
</head>
<body>

    <div class="container">
        @include('layouts.sidebars')
        <div class="courses-container">
            @foreach ($courses as $course)
                <div class="course">
                    <img src="{{ asset('course_images/' . $course->id . '.jpg') }}" alt="{{ $course->name }} Image">
                    <h2>{{ $course->name }}</h2>
                    <p>Author: {{ $course->author }}</p>
                    <p>Rating: {{ $course->rating }}</p>
                    <p>Price: ${{ $course->price }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

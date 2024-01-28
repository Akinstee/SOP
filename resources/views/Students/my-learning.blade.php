<!-- resources/views/my_learning.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/simple-calendar/simple-calendar.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/style32.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/courses.css') }}"> --}}
    <title>My Learning</title>
</head>
<body>

    <div class="container">
        <!--Header Navbar Start-->
        @include('layouts.studentnav')
        <!--Header Navbar End-->
    
        {{-- Sidebar Start --}}
        @include('layouts.studentside')
        {{-- Sidebar Ends --}}
        <div class="page-wrapper">

            <div class="courses-container">
                @forelse ($courses as $course)
                    <div class="course">
                        <img src="{{ asset('course_images/' . $course->id . '.jpg') }}" alt="{{ $course->name }} Image">
                        <h2>{{ $course->name }}</h2>
                        <p>Author: {{ $course->author }}</p>
                        <p>Rating: {{ $course->rating }}</p>
                        <p>Price: ${{ $course->price }}</p>
                    </div>
                @empty
                    <p>No available courses at the moment. Check back later!</p>
                @endforelse
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('/js/feather.min.js')}}"></script>

    <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{ asset('/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('/plugins/apexchart/chart-data.js')}}"></script>

    <script src="{{ asset('/plugins/simple-calendar/jquery.simple-calendar.js')}}"></script>
    <script src="{{ asset('/js/calander.js')}}"></script>

    <script src="{{ asset('/js/circle-progress.min.js')}}"></script>

    <script src="{{ asset('/js/script.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!--Header Navbar Start-->
    @include('layouts.studentnav')
    <!--Header Navbar End-->

    {{-- Sidebar Start --}}
    @include('layouts.studentside')
    {{-- Sidebar Ends --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <h1>Dashboard</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>Announcements</h2>
                    <p>Important Updates & Reminders</p>
                </div>
                <div class="col-md-6">
                    <h2>Quick Actions</h2>
                    <ul class="list-unstyled">
                        <li><a href="#">Join Zoom Class</a></li>
                        <li><a href="#">Access Library</a></li>
                        <li><a href="#">View Tasks</a></li>
                    </ul>
                </div>
            </div>
            <h2>Join Zoom Class</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Upcoming Classes</h4>
                    <ul class="list-unstyled">
                        <li>[Course - Batch-Lesson] [Date & Time] [Join Link]</li>
                        <li>[Course-Batch Lesson] [Date & Time] [Join Link]</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Previous Classes</h4>
                    <ul class="list-unstyled">
                        <li>[Course - Batch-Lesson] [Date & Time] [Recording Link]</li>
                    </ul>
                </div>
            </div>
            <h2>Library - Documents</h2>
            <h2>Tasks</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Technical Tasks</h4>
                    <ul class="list-unstyled">
                        <li>[Task 1 Description] [Due Date] <a href="{{ route('tasks.submit') }}">[Submit Response]</a></li>
                        <li><a href="#">Completion Status</a></li>
                        <li><a href="#">Assessment Status</a></li>
                        <li><a href="#">Remark/Advice</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Personal Development Tasks</h4>
                    <ul class="list-unstyled">
                        <li>[Task 1 Description] [Due Date] <a href="{{ route('tasks.submit') }}">[Submit Response]</a></li>
                        <li><a href="#">Completion Status</a></li>
                        <li><a href="#">Assessment Status</a></li>
                        <li><a href="#">Remark/Advice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

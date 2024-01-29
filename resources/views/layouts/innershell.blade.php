<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title', 'SOPS - Dashboard')</title>
    <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">
    <!-- Add your stylesheet links here -->
    @yield('styles')
    @include('layouts.partials.styles')
</head>

<body>
    <div class="main-wrapper">
        <!-- Header Navbar Start -->
        @include('layouts.studentnav')
        <!-- Header Navbar End -->

        {{-- Sidebar Start --}}
        @include('layouts.studentside')
        {{-- Sidebar Ends --}}

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Add your script links here -->
    @include('layouts.partials.scripts')
</body>

</html>

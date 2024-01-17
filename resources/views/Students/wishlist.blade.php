<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" /> --}}
    <title>SOPS Wishlist</title>
</head>
<body>

    <div class="container">
        <!--Header Navbar Start-->
        @include('layouts.studentnav')
        <!--Header Navbar End-->
    
        {{-- Sidebar Start --}}
        @include('layouts.studentside')
        {{-- Sidebar Ends --}}
    <div class="wishlist-container">
        <h1>My Wishlist</h1>

        @foreach ($courses as $course)
            <div class="wishlist-item">
                <img src="{{ asset($course['image']) }}" alt="{{ $course['name'] }}">
                <div class="item-details">
                    <h2>{{ $course['name'] }}</h2>
                    <p>{{ $course['description'] }}</p>
                    <p class="price">${{ $course['price'] }}</p>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        @endforeach

    </div>
    </div>


    


</body>
</html>

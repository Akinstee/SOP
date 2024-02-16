<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SOPS - Dashboard</title>
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
</head>

<body>
    <div class="main-wrapper">
        <!--Header Navbar Start-->
        @include('layouts.studentnav')
        <!--Header Navbar End-->

        {{-- Sidebar Start --}}
        @include('layouts.studentside')
        {{-- Sidebar Ends --}}

        <div class="page-wrapper">
            <div class="content container-fluid">

                {{-- <div class="wishlist-container">
                    <h1>My Wishlist</h1>
        
                                @foreach ($courses as $course)
                                    <div class="wishlist-item">
                                        <img src="{{ asset($course['image']) }}" alt="{{ $course['name'] }}">
                                        <div class="item-details">
                                            <h2>{{ $course['name'] }}</h2>
                                            <p>{{ $course['author'] }}</p>
                                            <p>{{ $course['description'] }}</p>
                                            <p class="price">${{ $course['price'] }}</p>
                                            <button class="remove-btn">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                </div> --}}

                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset($course['image']) }}" class="card-img-top" alt="{{ $course['name'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $course['name'] }}</h5>
                                    <p class="card-text">{{ $course['author'] }}</p>
                                    <p class="card-text">{{ $course['description'] }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            @for ($i = 0; $i < $course['rating']; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                            @for ($i = $course['rating']; $i < 5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                        </div>
                                        <p class="duration">{{ $course['duration'] }} hours</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <p class="price">${{ $course['price'] }}</p>
                                        <button class="btn btn-danger remove-btn">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                
            </div>

            <footer>
                <p>Copyright © 2024 RockStride.</p>
            </footer>

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

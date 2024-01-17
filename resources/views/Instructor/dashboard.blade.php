<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Instructor Dashboard</title>
    <link rel="shortcut icon" href="{{asset ('/img/SOPS.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/css/style32.css')}}">
</head>

<body>

    <div class="main-wrapper">

        <!--Header Navbar Start-->
        @include('layouts.instructornav')
        <!--Header Navbar End-->

        {{-- Sidebar Start --}}
        @include('layouts.instructorside')
        {{-- Sidebar Ends --}}

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Instructor!</h3>
                                <ul class="breadcrumb">
                                    <a href="{{ route('instructor.dashboard') }}"></a>Home</a></li>
                                    <li class="breadcrumb-item active">Instructor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Active COurses</h6>
                                        <h3>{{ $activeCoursesCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-01.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Paid Courses</h6>
                                        <h3>{{ $paidCoursesCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-02.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Free Courses</h6>
                                        <h3>{{ $freeCoursesCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-03.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Revenue</h6>
                                        <h3>{{ $totalRevenue }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-04.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Instructor</li>
                                            <li><span class="circle-green"></span>Student</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Number of Students</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Girls</li>
                                            <li><span class="circle-green"></span>Boys</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Star Students</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Marks</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-end">Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($starStudents as $student)
                                                <tr>
                                                    <td class="text-nowrap">
                                                        <div>{{ $student->id }}</div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <a href="{{ route('instructor.profile') }}">
                                                            <img class="rounded-circle" src="{{ asset('/img/profiles/avatar-02.jpg') }}" width="25" alt="Star Students">
                                                            {{ $student->name }}
                                                        </a>
                                                    </td>
                                                    <td class="text-center">{{ $student->marks }}</td>
                                                    <td class="text-center">{{ $student->percentage }}%</td>
                                                    <td class="text-end">
                                                        <div>{{ $student->year }}</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title ">Student Activity </h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                @foreach ($studentActivities as $activity)
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <!-- You may need to adjust the icons based on your actual activities -->
                                            <img src="{{ asset('/img/icons/award-icon-01.svg') }}" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>{{ $activity->title }}</h4>
                                            <h5>{{ $activity->description }}</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>{{ $activity->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Social media Start --}}
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill fb sm-box">
                            <div class="social-likes">
                                <p>Like us on facebook</p>
                                <h6>50,095</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-01.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill twitter sm-box">
                            <div class="social-likes">
                                <p>Follow us on twitter</p>
                                <h6>48,596</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-02.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill insta sm-box">
                            <div class="social-likes">
                                <p>Follow us on instagram</p>
                                <h6>52,085</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-03.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill linkedin sm-box">
                            <div class="social-likes">
                                <p>Follow us on linkedin</p>
                                <h6>69,050</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-04.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Social media Ends --}}
            </div>
            <footer>
                <p>Copyright © 2022 WhiteSprout.</p>
            </footer>
        </div>
    </div>

    <script src="{{asset ('/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('/js/feather.min.js')}}"></script>
    <script src="{{asset ('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset ('/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset ('/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{asset ('/js/script.js')}}"></script>
</body>

</html>
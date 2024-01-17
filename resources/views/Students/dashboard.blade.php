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
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" /> --}}
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

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Bruklin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('student.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active">Student</li>
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
                                        <h6>All Courses</h6>
                                        <h3>04/06</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/teacher-icon-01.svg')}}" alt="Dashboard Icon">
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
                                        <h6>All Projects</h6>
                                        <h3>40/60</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/teacher-icon-02.svg')}}" alt="Dashboard Icon">
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
                                        <h6>Test Attended</h6>
                                        <h3>30/50</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/student-icon-01.svg')}}" alt="Dashboard Icon">
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
                                        <h6>Test Passed</h6>
                                        <h3>15/20</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/student-icon-02.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-top">
                    <h1>Skills</h1>
                    <i class="fas fa-user-cog"></i>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Web developemt</h6>
                                        <p><b>Join Over 2 million Students.</b></p>
                                        <a href="#" style="display: inline-block; padding: 10px 30px; font-size: 12px; text-align: center; text-decoration: none; background-color: red; color: #ffffff; border-radius: 3px; border: 1px solid red;">Get Started</a>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/laptop-code.svg')}}" alt="Dashboard Icon">
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
                                        <h6>WordPress</h6>
                                        <p><b>Join Over 3 million Students.</b></p>
                                        <a href="#" style="display: inline-block; padding: 10px 30px; font-size: 12px; text-align: center; text-decoration: none; background-color: red; color: #ffffff; border-radius: 3px; border: 1px solid red;">Get Started</a>

                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/wordpress-logo.svg')}}" alt="Dashboard Icon">
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
                                        <h6>graphic design</h6>
                                        <p><b>Join Over 2 million Students.</b></p>
                                        <a href="#" style="display: inline-block; padding: 10px 30px; font-size: 12px; text-align: center; text-decoration: none; background-color: red; color: #ffffff; border-radius: 3px; border: 1px solid red;">Get Started</a>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/palette.svg')}}" alt="Dashboard Icon">
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
                                        <h6>IOS dev</h6>
                                        <p><b>Join Over 1 million Students.</b></p>
                                        <a href="#" style="display: inline-block; padding: 10px 30px; font-size: 12px; text-align: center; text-decoration: none; background-color: red; color: #ffffff; border-radius: 3px; border: 1px solid red;">Get Started</a>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('/img/icons/app-store.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <section class="main">

                    <section class="main-course">
                        <h1>My courses</h1>
                        <div class="course-box">
                            <ul>
                                <li class="active">In progress</li>
                                {{-- <li><a href="#">explore</a></li>
                                <li><a href="#">incoming</a></li> --}}
                                {{-- <li><a href="#">finished</a></li> --}}
                                <li>finished</li>
                            </ul>
                            <div class="course">
                                <div class="box">
                                    <h3>HTML</h3>
                                    <p>80% - progress</p>
                                    <button>continue</button>
                                    <i class="fab fa-html5 html"></i>
                                </div>
                                <div class="box">
                                    <h3>CSS</h3>
                                    <p>50% - progress</p>
                                    <button>continue</button>
                                    <i class="fab fa-css3-alt css"></i>
                                </div>
                                <div class="box">
                                    <h3>JavaScript</h3>
                                    <p>30% - progress</p>
                                    <button>continue</button>
                                    <i class="fab fa-js-square js"></i>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>


                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-8">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Today’s Lesson</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span><span class="circle-gray"></span><span
                                                    class="circle-gray"></span></li>
                                            <li class="lesson-view-all"><a href="#">View All</a></li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="dash-circle">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 dash-widget1">
                                        <div class="circle-bar circle-bar2">
                                            <div class="circle-graph2" data-percent="80">
                                                <b>80%</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="dash-details">
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-01.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Class</h5>
                                                    <h4>Electrical Engg</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-02.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Lessons</h5>
                                                    <h4>5 Lessons</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-03.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Time</h5>
                                                    <h4>Lessons</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="dash-details">
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-04.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Asignment</h5>
                                                    <h4>5 Asignment</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-05.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Staff</h5>
                                                    <h4>John Doe</h4>
                                                </div>
                                            </div>
                                            <div class="lesson-activity">
                                                <div class="lesson-imgs">
                                                    <img src="{{ asset('/img/icons/lesson-icon-06.svg')}}" alt="">
                                                </div>
                                                <div class="views-lesson">
                                                    <h5>Lesson Learned</h5>
                                                    <h4>10/50</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="skip-group">
                                            <button type="submit" class="btn btn-info skip-btn">skip</button>
                                            <button type="submit" class="btn btn-info continue-btn">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill comman-shadow">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="card-title">Learning Activity</h5>
                                            </div>
                                            <div class="col-6">
                                                <ul class="chart-list-out">
                                                    <li><span class="circle-blue"></span>Teacher</li>
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
                            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                <div class="card flex-fill comman-shadow">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title">Teaching History</h5>
                                        <ul class="chart-list-out student-ellips">
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="teaching-card">
                                            <ul class="steps-history">
                                                <li>Sep22</li>
                                                <li>Sep23</li>
                                                <li>Sep24</li>
                                            </ul>
                                            <ul class="activity-feed">
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Mathematics</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">In Progress</button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Geography </a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns complete ms-auto">
                                                        <button type="submit" class="btn btn-info">Completed</button>
                                                    </div>
                                                </li>
                                                <li class="feed-item d-flex align-items-center">
                                                    <div class="dolor-activity">
                                                        <span class="feed-text1"><a>Botony</a></span>
                                                        <ul class="teacher-date-list">
                                                            <li><i class="fas fa-calendar-alt me-2"></i>September 5,
                                                                2022</li>
                                                            <li>|</li>
                                                            <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 am (60
                                                                Minutes)</li>
                                                        </ul>
                                                    </div>
                                                    <div class="activity-btns ms-auto">
                                                        <button type="submit" class="btn btn-info">In Progress</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-body">
                                <div id="calendar-doctor" class="calendar-container"></div>
                                <div class="calendar-info calendar-info1">
                                    <div class="up-come-header">
                                        <h2>Upcoming Events</h2>
                                        <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Botony</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="upcome-event-date">
                                        <h3>10 Jan</h3>
                                        <span><i class="fas fa-ellipsis-h"></i></span>
                                    </div>
                                    <div class="calendar-details">
                                        <p>08:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>English</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>08:00 - 09:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>09:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>Mathematics </h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>09:00 - 10:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>10:00 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>10:00 - 11:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:00 am</p>
                                        <div class="calendar-box break-bg">
                                            <div class="calandar-event-name">
                                                <h4>Break</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:00 - 12:00 am</span>
                                        </div>
                                    </div>
                                    <div class="calendar-details">
                                        <p>11:30 am</p>
                                        <div class="calendar-box normal-bg">
                                            <div class="calandar-event-name">
                                                <h4>History</h4>
                                                <h5>Lorem ipsum sit amet</h5>
                                            </div>
                                            <span>11:30 - 12:00 am</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
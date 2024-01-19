<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SOPS - Courses</title>

<link rel="shortcut icon" href="{{asset ('/img/favicon.png')}}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset ('/plugins/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset ('/plugins/feather/feather.css')}}">

<link rel="stylesheet" href="{{asset ('/plugins/icons/flags/flags.css')}}">

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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Course</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{('instructor.courses')}}">Course</a></li>
                                <li class="breadcrumb-item active">Add Course</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('instructor.store_course') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Course Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Course ID <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Course Name <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Course Author <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Course rating <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Course price <span class="login-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="{{asset ('/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset ('/js/feather.min.js')}}"></script>

    <script src="{{asset ('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset ('/js/script.js')}}"></script>
</body>
</html>
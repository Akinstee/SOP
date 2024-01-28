<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SOPS - Profile</title>

<link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('/css/style32.css') }}">
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
                            <div class="col">
                                <h3 class="page-title">Profile</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-header">
                                <div class="row align-items-center">
                                    <div class="col-auto profile-image">
                                        <a href="#">
                                            <img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                        </a>
                                    </div>
                                    <div class="col ms-md-n2 profile-user-info">
                                        <h4 class="user-name mb-0">{{ Auth::guard('instructor')->user()->name }}</h4>
                                        <h6 class="text-muted">UI/UX Design Team</h6>
                                        <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Florida, United States</div>
                                        <div class="about-text">Lorem ipsum dolor sit amet.</div>
                                    </div>
                                    <div class="col-auto profile-btn">
                                        <a href="{{ route('instructor.edit') }}" class="btn btn-primary">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-menu">
                                <ul class="nav nav-tabs nav-tabs-solid">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content profile-tab-cont">
                                <div class="tab-pane fade show active" id="per_details_tab">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Personal Details</span>
                                                        <a class="edit-link" data-bs-toggle="modal" href="{{ route('instructor.edit') }}"><i class="far fa-edit me-1"></i>Edit</a>
                                                    </h5>
                                                    @if($instructor)
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                        <p class="col-sm-9">{{ $instructor->name }}</p>
                                                        {{-- <p class="col-sm-9">{{Auth::guard('instructor')->user()->name}}</p> --}}
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
                                                        <p class="col-sm-9">{{ $instructor->date_of_birth }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                        <p class="col-sm-9"><a href="mailto:{{ $instructor->email }}">{{ $instructor->email }}</a></p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                        <p class="col-sm-9">{{ $instructor->phone_number }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Qualification</p>
                                                        <p class="col-sm-9">{{ $instructor->hightest_qualification }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Years Of Experience</p>
                                                        <p class="col-sm-9">{{ $instructor->years_of_experience }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Arears Of Expertise</p>
                                                        <p class="col-sm-9">{{ $instructor->areas_of_expertise }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                                        <p class="col-sm-9 mb-0">{{ $instructor->address }}</p>
                                                    </div>
                                                    @else
                                                        <p>No instructor data found.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Account Status</span>
                                                        <a class="edit-link" href="{{ route('instructor.edit') }}"><i class="far fa-edit me-1"></i> Edit</a>
                                                    </h5>
                                                    <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
                                                </div>
                                            </div>
                
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title d-flex justify-content-between">
                                                        <span>Skills </span>
                                                        <a class="edit-link" href="{{ route('instructor.edit') }}"><i class="far fa-edit me-1"></i> Edit</a>
                                                    </h5>
                                                    @if($instructor && $instructor->skills)
                                                    <div class="skill-tags">
                                                        @foreach($instructor->skills as $skill)
                                                            <span>{{ $skill }}</span>
                                                        @endforeach
                                                    </div>
                                                    @else
                                                    <p>No skills found.</p>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="password_tab" class="tab-pane fade">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Change Password</h5>
                                            <div class="row">
                                                <div class="col-md-10 col-lg-6">
                                                    <form action="{{ route('instructor.change.password') }}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <input type="password" name="old_password" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <input type="password" name="new_password" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Confirm Password</label>
                                                            <input type="password" name="new_password_confirmation" class="form-control">
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
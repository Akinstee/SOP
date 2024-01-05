<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SOPS - NOtification Bar</title>

    <link rel="shortcut icon" href="{{ asset('/img/favicon.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/alertify/alertify.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/style32.css')}}">
    </head>
    <body>

        <div class="main-wrapper">

            <!--Header Navbar Start-->
            @include('layouts.adminnav')
            <!--Header Navbar End-->

            {{-- Sidebar Start --}}
            @include('layouts.adminside')
            {{-- Sidebar Ends --}}

            <div class="page-wrapper">
                <div class="content container-fluid">

                    <div class="page-header">
                    <div class="row">
                    <div class="col">
                    <h3 class="page-title">Notification</h3>
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.Dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Components</li>
                    </ul>
                    </div>
                    </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Alert</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Confirm</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Prompt</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Success Alert</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Error Alert</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>


                        <div class="col-md-4">
                        <div class="card">
                        <div class="card-header">
                        <div class="card-title">Warnng Alert</div>
                        </div>
                        <div class="card-body">
                        <a href="javascript: void(0);" id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
                        </div>
                        </div>
                        </div>

                    </div>
                </div>

                <footer>
                    <p>Copyright © 2023 RockStride.</p>
                </footer>

            </div>

        </div>


        <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('/plugins/alertify/alertify.min.js')}}"></script>
        <script src="{{ asset('/plugins/alertify/custom-alertify.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
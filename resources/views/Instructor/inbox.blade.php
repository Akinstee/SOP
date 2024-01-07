<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SOPS - Inbox</title>

    <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/css/style32.css')}}">
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
                            <h3 class="page-title">Inbox</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Inbox</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="compose-btn">
                            <a href="{{ route('instructor.compose') }}" class="btn btn-primary btn-block">Compose</a>
                        </div>
                        <ul class="inbox-menu">
                            <li class="active">
                                <a href="#"><i class="fas fa-download"></i> Inbox <span class="mail-count">(5)</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-star"></i> Important</a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-paper-plane"></i> Sent Mail</a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-file-alt"></i> Drafts <span class="mail-count">(13)</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-trash-alt"></i> Trash</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-header">
                                    <div class="row">
                                        <div class="col top-action-left">
                                            <div class="float-start">
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Select <i class="fas fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">All</a>
                                                        <a class="dropdown-item" href="#">None</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Read</a>
                                                        <a class="dropdown-item" href="#">Unread</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Actions <i class="fas fa-angle-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Reply</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Mark As Read</a>
                                                        <a class="dropdown-item" href="#">Mark As Unread</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-folder"></i> <i class="fas fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <a class="dropdown-item" href="#">Trash</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">New</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" data-bs-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fas fa-tags"></i> <i class="fas fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Work</a>
                                                        <a class="dropdown-item" href="#">Family</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Primary</a>
                                                        <a class="dropdown-item" href="#">Promotions</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action mail-search">
                                                    <input type="text" placeholder="Search Messages" class="form-control search-message">
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-auto top-action-right">
                                            <div class="text-end">
                                                <button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fas fa-sync-alt"></i></button>
                                                <div class="btn-group">
                                                    <a class="btn btn-white"><i class="fas fa-angle-left"></i></a>
                                                    <a class="btn btn-white"><i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="email-content">
                                    <div class="table-responsive">
                                        <table class="table table-inbox table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="6">
                                                        <input type="checkbox" class="checkbox-all">
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Loop through emails from the database -->
                                                @foreach($emails as $email)
                                                    <tr class="{{ $email->status == 'unread' ? 'unread' : 'clickable-row' }}">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
                                                        <td class="name">Sender: {{ $email->sender }}</td>
                                                        <td class="subject">Subject: {{ $email->subject }}</td>
                                                        <td><i class="fas fa-paperclip"></i></td>
                                                        <td class="mail-date">{{ $email->created_at->format('H:i') }}</td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{ asset('/js/feather.min.js')}}"></script>

        <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{ asset('/js/script.js')}}"></script>
    </body>
</html>
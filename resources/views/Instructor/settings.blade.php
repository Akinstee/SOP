<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SOPS - Settings</title>

    <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}">

    <link rel="stylesheet" href="{{ asset('/css/feather.css')}}">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datetimepicker.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css')}}">

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
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('instructor.settings')}}">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('instructor.settings')}}">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instructor.localization-details')}}">Localization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instructor.payment-settings')}}">Payment Settings</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('instructor.social-links')}}">Social Links</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="row">
                        {{-- <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Website Basic Details</h5>
                                </div>
                                <div class="card-body pt-0">
                                    <form>
                                        <div class="settings-form">
                                            <div class="form-group">
                                                <label>Website Name <span class="star-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Website Name">
                                            </div>
                                            <div class="form-group">
                                                <p class="settings-label">Logo <span class="star-red">*</span></p>
                                                <div class="settings-btn">
                                                    <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                                    <label for="file" class="upload">
                                                        <i class="feather-upload"></i>
                                                    </label>
                                                </div>
                                                <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
                                                <div class="upload-images">
                                                    <img src="{{ asset('/img/SOPS.png')}}" alt="Image">
                                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                        <i class="feather-x-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                                <div class="settings-btn">
                                                    <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" class="hide-input">
                                                    <label for="file" class="upload">
                                                        <i class="feather-upload"></i>
                                                    </label>
                                                </div>
                                                <h6 class="settings-size">
                                                Recommended image size is <span>16px x 16px or 32px x 32px</span>
                                                </h6>
                                                <h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
                                                <div class="upload-images upload-size">
                                                    <img src="{{ asset('/img/SOPS.png')}}" alt="Image">
                                                    <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                        <i class="feather-x-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6">
                                                    <div class="form-group">
                                                        <div class="status-toggle d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">RTL</p>
                                                            <input type="checkbox" id="status_1" class="check">
                                                            <label for="status_1" class="checktoggle">checkbox</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="settings-btns">
                                                    <button type="submit" class="btn btn-orange">Update</button>
                                                    <button type="submit" class="btn btn-grey">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Address Details</h5>
                                </div>
                                <div class="card-body pt-0">
                                    <form>
                                        <div class="settings-form">
                                            <div class="form-group">
                                                <label>Address Line 1 <span class="star-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Address Line 1">
                                            </div>
                                            <div class="form-group">
                                                <label>Address Line 2 <span class="star-red">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Address Line 2">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>City <span class="star-red">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>State/Province <span class="star-red">*</span></label>
                                                        <select class="select form-control">
                                                            <option selected="selected">Select</option>
                                                            <option>California</option>
                                                            <option>Tasmania</option>
                                                            <option>Auckland</option>
                                                            <option>Marlborough</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Zip/Postal Code <span class="star-red">*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Country <span class="star-red">*</span></label>
                                                        <select class="select form-control">
                                                            <option selected="selected">Select</option>
                                                            <option>India</option>
                                                            <option>London</option>
                                                            <option>France</option>
                                                            <option>USA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <div class="settings-btns">
                                                    <button type="submit" class="btn btn-orange">Update</button>
                                                    <button type="submit" class="btn btn-grey">Cancel</button>
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

    <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('/js/feather.min.js')}}"></script>
    <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('/js/moment.min.js')}}"></script>
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('/js/script.js')}}"></script>
</body>
</html>
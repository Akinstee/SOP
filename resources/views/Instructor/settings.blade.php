<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Books</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style32.css">
</head>
<body>

    <div class="main-wrapper">
        {{-- Search Box Start --}}
        <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-bl me-2"></i>Francais</a>
                        <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                    </div>
                </li>

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                        <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                        <ul class="notification-list">
                        <li class="notification-message">
                        <a href="#">
                        <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                        </span>
                        <div class="media-body flex-grow-1">
                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                        </div>
                        </div>
                        </a>
                        </li>
                        <li class="notification-message">
                        <a href="#">
                        <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                        </span>
                        <div class="media-body flex-grow-1">
                        <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                        </div>
                        </div>
                        </a>
                        </li>
                        <li class="notification-message">
                        <a href="#">
                        <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                        </span>
                        <div class="media-body flex-grow-1">
                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                        </div>
                        </div>
                        </a>
                        </li>
                        <li class="notification-message">
                        <a href="#">
                        <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                        <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                        </span>
                        <div class="media-body flex-grow-1">
                        <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                        </div>
                        </div>
                        </a>
                        </li>
                        </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                        </div>
                        </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy">
                            <div class="user-text">
                                <h6>Temitayo</h6>
                                <p class="text-muted mb-0">Instructor</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                    <div class="user-header">
                    <div class="avatar avatar-sm">
                    <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                    <h6>Temitayo</h6>
                    <p class="text-muted mb-0">Instructor</p>
                    </div>
                    </div>
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="inbox.html">Inbox</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
        {{-- Search Box Ends --}}

        {{-- Sidebar Begins --}}
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        <span>Main Menu</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.html">Student Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="students.html">Student List</a></li>
                                <li><a href="student-details.html">Student View</a></li>
                                <li><a href="add-student.html">Student Add</a></li>
                                <li><a href="edit-student.html">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.html">Teacher List</a></li>
                                <li><a href="teacher-details.html">Teacher View</a></li>
                                <li><a href="add-teacher.html">Teacher Add</a></li>
                                <li><a href="edit-teacher.html">Teacher Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                            <ul>
                            <li><a href="departments.html">Department List</a></li>
                            <li><a href="add-department.html">Department Add</a></li>
                            <li><a href="edit-department.html">Department Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.html">Subject List</a></li>
                                <li><a href="add-subject.html">Subject Add</a></li>
                                <li><a href="edit-subject.html">Subject Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.html">Invoices List</a></li>
                                <li><a href="invoice-grid.html">Invoices Grid</a></li>
                                <li><a href="add-invoice.html">Add Invoices</a></li>
                                <li><a href="edit-invoice.html">Edit Invoices</a></li>
                                <li><a href="view-invoice.html">Invoices Details</a></li>
                                <li><a href="invoices-settings.html">Invoices Settings</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections.html">Fees Collection</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="salary.html">Salary</a></li>
                                <li><a href="add-fees-collection.html">Add Fees</a></li>
                                <li><a href="add-expenses.html">Add Expenses</a></li>
                                <li><a href="add-salary.html">Add Salary</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                        </li>
                        <li>
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                        </li>
                        <li>
                            <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                        </li>
                        <li>
                            <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                        </li>
                        <li>
                            <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="active">
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        
                        <li class="submenu">
                            <ul>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="error-404.html">Error Page</a></li>
                            </ul>
                        </li>
                        
                    </li>
                    
                    <li class="submenu">
                    <a href="#"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul>
                    <li><a href="chart-apex.html">Apex Charts</a></li>
                    <li><a href="chart-js.html">Chart Js</a></li>
                    <li><a href="chart-morris.html">Morris Charts</a></li>
                    <li><a href="chart-flot.html">Flot Charts</a></li>
                    <li><a href="chart-peity.html">Peity Charts</a></li>
                    <li><a href="chart-c3.html">C3 Charts</a></li>
                    </ul>
                    </li>
                    <li class="submenu">
                    <a href="#"><i data-feather="award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul>
                    <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                    <li><a href="icon-feather.html">Feather Icons</a></li>
                    <li><a href="icon-ionic.html">Ionic Icons</a></li>
                    <li><a href="icon-material.html">Material Icons</a></li>
                    <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                    <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                    <li><a href="icon-themify.html">Themify Icons</a></li>
                    <li><a href="icon-weather.html">Weather Icons</a></li>
                    <li><a href="icon-typicon.html">Typicon Icons</a></li>
                    <li><a href="icon-flag.html">Flag Icons</a></li>
                    </ul>
                    </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html"> Form Mask </a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Sidebar Ends --}}

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="settings-menu-links">
                    <ul class="nav nav-tabs menu-tabs">
                        <li class="nav-item active">
                            <a class="nav-link" href="settings.html">General Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="localization-details.html">Localization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payment-settings.html">Payment Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="email-settings.html">Email Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="social-settings.html">Social Media Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="social-links.html">Social Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seo-settings.html">SEO Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="others-settings.html">Others</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                        <div class="col-md-6">
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
                                                    <img src="assets/img/logo.png" alt="Image">
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
                                                    <img src="assets/img/favicon.png" alt="Image">
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
                        </div>
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

    <script src="{{asset ('/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('/js/feather.min.js')}}"></script>
    <script src="{{asset ('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset ('/js/moment.min.js')}}"></script>
    <script src="{{asset ('/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset ('/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset ('/js/script.js')}}"></script>
</body>
</html>
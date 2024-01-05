<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Dashboard</span>
                </li>
                <li class="submenu active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a><i class="feather-grid"></i> <span> Admin</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.students')}}">Student List</a></li>
                        <li><a href="{{ route('admin.student-details')}}">Student View</a></li>
                        <li><a href="{{ route('admin.add-student')}}">Student Add</a></li>
                        <li><a href="{{ route('admin.edit-student')}}">Student Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-instructor"></i> <span> Instructors</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.instructor')}}">Instructor List</a></li>
                        <li><a href="{{ route('admin.instructor-details')}}">Instructor View</a></li>
                        <li><a href="{{ route('admin.add-instructor')}}">Instructor Add</a></li>
                        <li><a href="{{ route('admin.edit-instructor')}}">Instructor Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route ('admin.courses')}}">Courses List</a></li>
                        <li><a href="{{route ('admin.add-course')}}">Courses Add</a></li>
                        <li><a href="{{route ('admin.edit-courses')}}">Courses Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.invoices')}}">Invoices List</a></li>
                        <li><a href="{{ route('admin.add-invoice')}}">Add Invoices</a></li>
                        <li><a href="{{ route('admin.edit-invoice') }}">Edit Invoices</a></li>
                        <li><a href="{{ route('admin.view-invoice') }}">Invoices Details</a></li>
                        <li><a href="{{ route('admin.invoices-settings') }}">Invoices Settings</a></li>
                    </ul>
                </li>
               
                <li class="submenu">
                    <a href="{{route ('admin.settings')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route ('admin.login')}}">Login</a></li>
                        <li><a href="{{route ('admin.forgot-password')}}">Forgot Password</a></li>
                        <li><a href="{{route ('admin.error-404')}}">Error Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
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
                        <li><a href="{{ route('students.blade.php')}}">Student List</a></li>
                        <li><a href="{{ route('student-details.blade.php')}}">Student View</a></li>
                        <li><a href="{{ route('add-student.blade.php')}}">Student Add</a></li>
                        <li><a href="{{ route('edit-student.blade.php')}}">Student Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Instructors</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route ('teachers.blade.php')}}">Instructor List</a></li>
                        <li><a href="{{route ('teacher-details.blade.php')}}">Instructor View</a></li>
                        <li><a href="{{route ('add-teacher.blade.php')}}">Instructor Add</a></li>
                        <li><a href="{{route ('edit-teacher.blade.php')}}">Instructor Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route ('courses.blade.php')}}">Courses List</a></li>
                        <li><a href="{{route ('add-course.blade.php')}}">Courses Add</a></li>
                        <li><a href="{{route ('edit-courses.blade.php')}}">Courses Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="invoices.html">Invoices List</a></li>
                        <li><a href="invoice-grid.html">Invoices Grid</a></li>
                        <li><a href="add-invoice.html">Add Invoices</a></li>
                        <li><a href="edit-invoice.html">Edit Invoices</a></li>
                        <li><a href="view-invoice.html">Invoices Details</a></li>
                        <li><a href="invoices-settings.html">Invoices Settings</a></li>
                    </ul>
                </li>
               
                <li class="submenu">
                    <a href="{{route ('settings.blade.php')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route ('login.blade.php')}}">Login</a></li>
                        <li><a href="{{route ('forgot-password.blade.php')}}">Forgot Password</a></li>
                        <li><a href="{{route ('error-404.blade.php')}}">Error Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
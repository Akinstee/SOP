<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu active">
                    <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.index')}}" class="active">Admin Dashboard</a></li>
                        <li><a href="{{ route('superadmin.instructor-dashboard')}}">Teacher Dashboard</a></li>
                        <li><a href="{{ route('superadmin.student-dashboard')}}">Student Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.students')}}">Student List</a></li>
                        <li><a href="{{ route('superadmin.student-details')}}">Student View</a></li>
                        <li><a href="{{ route('superadmin.add-student')}}">Student Add</a></li>
                        <li><a href="{{ route('superadmin.edit-student')}}">Student Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.instructors')}}">Teacher List</a></li>
                        <li><a href="{{ route('superadmin.instructor-details')}}">Teacher View</a></li>
                        <li><a href="{{ route('superadmin.add-instructor')}}">Teacher Add</a></li>
                        <li><a href="{{ route('superadmin.edit-instructor')}}">Teacher Edit</a></li>
                    </ul>
                </li>
                
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.course')}}">Subject List</a></li>
                        <li><a href="{{ route('superadmin.add-course')}}">Subject Add</a></li>
                        <li><a href="{{ route('superadmin.edit-course')}}">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.invoices')}}">Invoices List</a></li>
                        <li><a href="{{ route('superadmin.invoice-grid')}}">Invoices Grid</a></li>
                        <li><a href="{{ route('superadmin.add-invoice')}}">Add Invoices</a></li>
                        <li><a href="{{ route('superadmin.edit-invoice')}}">Edit Invoices</a></li>
                        <li><a href="{{ route('superadmin.view-invoice')}}">Invoices Details</a></li>
                        <li><a href="{{ route('superadmin.invoices-settings')}}">Invoices Settings</a></li>
                    </ul>
                </li>
        
                {{-- <li>
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
                </li> --}}
                
                <li class="submenu">
                    <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('superadmin.blog')}}">All Blogs</a></li>
                        <li><a href="{{ route('superadmin.add-blog')}}">Add Blog</a></li>
                        <li><a href="{{ route('superadmin.edit-blog')}}">Edit Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('superadmin.settings')}}"><i class="fas fa-cog"></i> <span>Settings</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('superadmin.login')}}">Login</a></li>
                        <li><a href="{{ route('superadmin.register')}}">Register</a></li>
                        <li><a href="{{ route('superadmin.forgot-password')}}">Forgot Password</a></li>
                        
                    </ul>
                </li>

                {{-- <li class="submenu">
                    <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li> --}}
                
            </ul>
        </div>
    </div>
</div>
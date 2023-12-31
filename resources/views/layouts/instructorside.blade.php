<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu active">
                    <a href="{{ route('instructor.dashboard') }}">Dashboard</a><i class="feather-grid"></i> <span> Instructor</span></a>
                    
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.courses')}}">Courses List</a></li>
                        <li><a href="{{ route('instructor.add-course')}}">Courses Add</a></li>
                        <li><a href="{{ route('instructor.edit-course') }}">Courses Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.invoices')}}">Invoices List</a></li>
                        <li><a href="{{ route('instructor.add-invoice')}}">Add Invoices</a></li>
                        <li><a href="{{ route('instructor.edit-invoice')}}">Edit Invoices</a></li>
                        <li><a href="{{ route('instructor.view-invoice')}}">Invoices Details</a></li>
                        <li><a href="{{ route('instructor.invoices-settings')}}">Invoices Settings</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="{{ route('instructor.settings')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.forgot-password')}}">Forgot Password</a></li>
                        <li><a href="{{ route('instructor.error-404')}}">Error Page</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
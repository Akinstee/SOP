<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu {{ is_active_link('instructor/dashboard*') }}">
                    <a href="{{ route('instructor.dashboard') }}">
                        <i class="feather-grid"></i>
                         <span> Instructor Dashboard</span>
                    </a>
                </li>
                <li class="submenu {{ is_active_link('instructor/courses*') }}">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.courses')}}">Courses List</a></li>
                        <li><a href="{{ route('instructor.add-course')}}">Courses Add</a></li>
                    </ul>
                </li>
                <li class="submenu {{ is_active_link('instructor/invoices*') }}">
                    <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.invoices')}}">Invoices List</a></li>
                        <li><a href="{{ route('instructor.add-invoice')}}">Add Invoices</a></li>
                        <li><a href="{{ route('instructor.edit-invoice')}}">Edit Invoices</a></li>
                        <li><a href="{{ route('instructor.view-invoice')}}">Invoices Details</a></li>
                        <li><a href="{{ route('instructor.invoices-settings') }}">Invoice Settings</a></li>
                    </ul>
                </li>
                <li class="{{ is_active_link('instructor/profile*') }}">
                    <a href="{{ route('instructor.profile')}}"><i class="fas fa-user"></i> <span> Profile</span></a>
                </li>
                <li class="submenu {{ is_active_link('instructor/settings*') }}">
                    <a href="{{ route('instructor.settings')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('instructor.forgot-password')}}">Forgot Password</a></li>

                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
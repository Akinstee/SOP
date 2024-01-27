<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu active">
                    <a href="{{ route('student.dashboard') }}">Dashboard</a><i class="feather-grid"></i> <span> student</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('student.courses')}}">Courses List</a></li>
                        <li><a href="{{ route('student.courses')}}">Courses Add</a></li>
                        <li><a href="{{ route('student.edit-course') }}">Courses Edit</a></li>
                    </ul>
                </li>

                <li><a href="{{route('student.my-learning')}}">
                    <i class="fas fa-book"></i>
                    <span class="nav-item">My Learning</span>
                  </a></li>
                  <li><a href="{{route('student.tasks')}}">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Tasks</span>
                  </a></li>
                  <li><a href="{{route('student.wishlist')}}">
                    <i class="fas fa-heart"></i>
                    <span class="nav-item">Wishlist</span>
                  </a></li>
                <li><a href="{{route('student.wallet')}}">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-item">Wallet</span>
                  </a></li>

                <li class="submenu">
                    <a href="{{ route('student.settings')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('student.forgot-password')}}">Forgot Password</a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>

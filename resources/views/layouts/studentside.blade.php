<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class=" {{ request()->is('student/dashboard*') ? 'active' : '' }}">
                    <a href="{{ route('student.dashboard') }}">
                        <i class="feather-grid"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                     <!-- <span> student</span> -->
                </li>
               
                <!-- <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('student.courses')}}">Courses List</a></li>
                        <li><a href="{{ route('student.courses')}}">Courses Add</a></li>
                        <li><a href="{{ route('student.edit-course') }}">Courses Edit</a></li>
                    </ul>
                </li> -->

                <li class="{{ request()->is('student/my-learning*') ? 'active' : '' }}"><a href="{{route('student.my-learning')}}">
                    <i class="fas fa-book"></i>
                    <span class="nav-item">My Learning</span>
                  </a>
                </li>
                  <!-- <li><a href="{{route('student.tasks')}}">
                    <i class="fas fa-tasks"></i>
                    <span class="nav-item">Tasks</span>
                  </a></li> -->
                <li class="{{ request()->is('student/wishlist*') ? 'active' : '' }}"><a href="{{route('student.wishlist')}}">
                    <i class="fas fa-heart"></i>
                    <span class="nav-item">Wishlist</span>
                  </a>
                </li>
                <li class="{{ request()->is('student/wallet*') ? 'active' : '' }}"><a href="{{route('student.wallet')}}">
                    <i class="fas fa-wallet"></i>
                    <span class="nav-item">Wallet</span>
                  </a>
                </li>

                <!-- <li class="submenu  {{ request()->is('student/settings*') ? 'active' : '' }}">
                    <a href="{{ route('student.settings')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('student.forgot-password')}}">Forgot Password</a></li>

                    </ul>
                </li> -->

    
                <li class="{{ request()->is('student/my-cart*') ? 'active' : '' }}">
                    <a href="{{route('student.my-cart')}}">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="nav-item">My Cart</span>
                    </a>
                </li>
                
                <li  class="{{ request()->is('student/messages*') ? 'active' : '' }}">
                    <a href="{{route('student.messages')}}">
                    <i class="fas fa-envelope"></i>
                    <span class="nav-item">Messages</span>
                    </a>
                </li>
                <li class="submenu  {{ request()->is('student/profile*') ? 'active' : '' }}">
                            <a href="{{ route('student.settings')}}"><i class="fas fa-shield-alt"></i> <span> Profile </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('student.profile')}}">View Profile</a></li>
                                <li><a href="{{ route('student.edit_profile')}}">Edit Profile</a></li>
                                <li><a href="{{ route('student.forgot-password')}}">Forgot Password</a></li>

                            </ul>
                            
                </li>
                <li class="{{ request()->is('student/analytics*') ? 'active' : '' }}">
                        <a href="{{route('student.analytics')}}">
                            <i class="fas fa-chart-bar"></i>
                            <span class="nav-item">Analytics</span>
                        </a>
                </li>
            
                <!-- <li>
                    <a href="{{route('student.settings')}}">
                    <i class="fas fa-cog"></i>
                    <span class="nav-item">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('student.help')}}">
                    <i class="fas fa-question-circle"></i>
                    <span class="nav-item">Help</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('student.logout')}}" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log out</span>
                    </a>
                </li> -->

    </ul>


        </div>
    </div>
</div>

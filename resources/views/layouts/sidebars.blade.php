<nav>
    <ul>
      <li><a href="{{route('student.dashboard')}}" class="logo">
        <img src="/logo.jpg" alt="">
        <span class="nav-item">DashBoard</span>
      </a></li>
      <li><a href="#">
        <i class="fas fa-home"></i>
        <span class="nav-item">Home</span>
      </a></li>
      <li><a href="{{route('student.my_learning')}}">
          <i class="fas fa-book"></i>
          <span class="nav-item">My Learning</span>
        </a></li>
        <li><a href="{{route('student.my_cart')}}">
          <i class="fas fa-shopping-cart"></i>
          <span class="nav-item">My Cart</span>
        </a></li>
        <li><a href="{{route('student.wishlist')}}">
          <i class="fas fa-heart"></i>
          <span class="nav-item">Wishlist</span>
        </a></li>
        <li><a href="{{route('student.notifications')}}">
          <i class="fas fa-bell"></i>
          <span class="nav-item">Notification</span>
        </a></li>
        <li><a href="{{route('student.messages')}}">
          <i class="fas fa-envelope"></i>
          <span class="nav-item">Messages</span>
        </a></li>
      <li><a href="{{route('student.profile')}}">
        <i class="fas fa-user"></i>
        <span class="nav-item">Profile</span>
      </a></li>
      <li><a href="{{route('student.edit_profile')}}">
          <i class="fas fa-user-edit"></i>
          <span class="nav-item">Edit Profile</span>
        </a></li>
      <li><a href="{{route('student.wallet')}}">
        <i class="fas fa-wallet"></i>
        <span class="nav-item">Wallet</span>
      </a></li>
      <li><a href="{{route('student.analytics')}}">
        <i class="fas fa-chart-bar"></i>
        <span class="nav-item">Analytics</span>
      </a></li>
      <li><a href="{{route('student.tasks')}}">
        <i class="fas fa-tasks"></i>
        <span class="nav-item">Tasks</span>
      </a></li>
      <li><a href="{{route('student.settings')}}">
        <i class="fas fa-cog"></i>
        <span class="nav-item">Settings</span>
      </a></li>
      <li><a href="{{route('student.help')}}">
        <i class="fas fa-question-circle"></i>
        <span class="nav-item">Help</span>
      </a></li>
      <li><a href="{{route('student.logout')}}" class="logout">
        <i class="fas fa-sign-out-alt"></i>
        <span class="nav-item">Log out</span>
      </a></li>
    </ul>
  </nav>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By SOP</title>
      <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="/logo.jpg" alt="">
              <span class="nav-item">DashBoard</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="">
                <i class="fas fa-book"></i>
                <span class="nav-item">My Learning</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-shopping-cart"></i>
                <span class="nav-item">My Cart</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-heart"></i>
                <span class="nav-item">Wishlist</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-bell"></i>
                <span class="nav-item">Notification</span>
              </a></li>
              <li><a href="">
                <i class="fas fa-envelope"></i>
                <span class="nav-item">Messages</span>
              </a></li>
            <li><a href="">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a></li>
            <li><a href="edit_profile.blade.php">
                <i class="fas fa-user-edit"></i>
                <span class="nav-item">Edit Profile</span>
              </a></li>
            <li><a href="">
              <i class="fas fa-wallet"></i>
              <span class="nav-item">Wallet</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Analytics</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-tasks"></i>
              <span class="nav-item">Tasks</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a></li>
            <li><a href="" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>

        iv class="container">
        <h1>Edit Student Profile</h1>
            <form action="{{ route('students.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" readonly>
                </div>
        
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}">
                </div>
        
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                </div>
        
                <div class="form-group">
                    <label for="state">State of Residence:</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ $student->state }}">
                </div>
        
                <div class="form-group">
                    <label for="profile_picture">Profile Picture:</label>
                    <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                </div>
        
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
    </div>

      </div>
    </body>
    </html></span>
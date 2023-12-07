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
            <h1>Edit Profile</h1>
        
            <form method="post" action="{{ url('/edit-profile/update') }}">
                @csrf
        
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}" required>
        
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" required>
        
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" value="{{ $student->email }}" readonly>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
        
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
        
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" value="{{ $student->gender }}" readonly>
        
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob" value="{{ $student->dob }}" readonly>
        
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ $student->phone_number }}" required>
        
                <label for="whatsapp">Available on WhatsApp:</label>
                <select id="whatsapp" name="whatsapp">
                    <option value="yes" {{ $student->whatsapp === 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ $student->whatsapp === 'no' ? 'selected' : '' }}>No</option>
                </select>
        
                <label for="city_from">Which city are you from?</label>
                <select id="city_from" name="city_from">
                    <option value="Lagos" {{ $student->city_from === 'Lagos' ? 'selected' : '' }}>Lagos</option>
                    <option value="Abuja" {{ $student->city_from === 'Abuja' ? 'selected' : '' }}>Abuja</option>
                    <option value="Port-Harcourt" {{ $student->city_from === 'Port-Harcourt' ? 'selected' : '' }}>Port-Harcourt</option>
                    <!-- Add other cities as needed -->
                </select>
        
                <label for="city_current">Which city do you currently live in?</label>
                <select id="city_current" name="city_current">
                    <!-- Populate with the same cities as "city_from" -->
                    <!-- You can use the same options as above -->
                </select>
        
                <label for="employed">Are you currently employed?</label>
                <select id="employed" name="employed">
                    <option value="yes" {{ $student->employed === 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ $student->employed === 'no' ? 'selected' : '' }}>No</option>
                </select>
        
                <label for="employment_status">Employment Status:</label>
                <select id="employment_status" name="employment_status">
                    <option value="Yes" {{ $student->employment_status === 'Yes' ? 'selected' : '' }}>Yes</option>
                    <option value="No" {{ $student->employment_status === 'No' ? 'selected' : '' }}>No</option>
                </select>
        
                <label for="studying">Are you currently studying?</label>
                <select id="studying" name="studying">
                    <option value="yes" {{ $student->studying === 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ $student->studying === 'no' ? 'selected' : '' }}>No</option>
                </select>
        
                <label for="computer_access">Do you have access to a computer and the internet?</label>
                <select id="computer_access" name="computer_access">
                    <option value="yes" {{ $student->computer_access === 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ $student->computer_access === 'no' ? 'selected' : '' }}>No</option>
                </select>
        
                <label for="skill_experience">Skill of Interest Experience:</label>
                <select id="skill_experience" name="skill_experience">
                    <option value="None" {{ $student->skill_experience === 'None' ? 'selected' : '' }}>None</option>
                    <option value="Basic" {{ $student->skill_experience === 'Basic' ? 'selected' : '' }}>Basic</option>
                    <option value="Intermediate" {{ $student->skill_experience === 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="Advanced" {{ $student->skill_experience === 'Advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
        
                <button type="submit">Update Profile</button>
            </form>
      </div>
    </body>
    </html></span>
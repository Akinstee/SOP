@extends('layouts.innershell')

<!--  -->
@section('styles')
<!-- Template Main CSS File -->
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <style>
        form {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          margin: 0 auto;
          width: 50%;
        }
        
        .form-group {
          margin-bottom: 15px;
          display: flex;
          flex-direction: column;
          width: 100%;
        }
        
        .form-label {
          margin-bottom: 5px;
          font-weight: bold;
        }
        
        .form-input {
          padding: 5px;
          border: 1px solid #ccc;
          border-radius: 4px;
          width: 100%;
        }
        
        .select-box {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }
        
        .submit-button {
          padding: 10px 20px;
          background-color: yellowgreen;
          color: yellowgreen;
          border-radius: 1px;
          cursor: pointer;
        }
        </style>
endsection
      
@section('content')
    <!-- Your page content goes here -->
    <div class="container">
            <h1>Edit Profile</h1>
        
            <form method="post" action="{{ url('/edit-profile/update') }}">
                @csrf
        
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" value="{{ Auth::guard('student')->user()->first_name }}" readonly>
              </div>
      
              <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" value="{{ Auth::guard('student')->user()->last_name }}" readonly>
              </div>
      
              <div class="form-group">
                  <label for="email">Email Address:</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ Auth::guard('student')->user()->email }}" readonly>
              </div>
      
              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
              </div>
      
              <div class="form-group">
                  <label for="confirm_password">Confirm Password:</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
              </div>
      
              <div class="form-group">
                  <label for="gender">Gender:</label>
                  <input type="text" class="form-control" id="gender" name="gender" value="{{ Auth::guard('student')->user()->gender }}" readonly>
              </div>
      
              <div class="form-group">
                  <label for="dob">Date of Birth:</label>
                  <input type="text" class="form-control" id="dob" name="dob" value="dob" readonly>
              </div>
      
              <div class="form-group">
                  <label for="phone_number">Phone Number:</label>
                  <input type="text" class="form-control" id="phone_number" name="phone_number" value="phone_number" required>
              </div>
      
              <div class="form-group">
                  <label for="whatsapp">Available on WhatsApp:</label>
                  <select class="form-control" id="whatsapp" name="whatsapp">
                    <option value="whatsapss">Available</option>  
                    <option value="yes">Yes</option>
                      <option value="no">No</option>
                  </select>
              </div>
      
              <div class="form-group">
                  <label for="city_from">Which city are you from?</label>
                  <select class="form-control" id="city_from" name="city_from" readonly>
                      </select>
              </div>
      
              <div class="form-group">
                  <label for="city_current">Which city do you currently live in?</label>
                  <select class="form-control" id="city_current" name="city_current">
                      </select>
              </div>
      
              <div class="form-group">
                  <label for="employed">Are you currently employed?</label>
                  <select class="form-control" id="employed" name="employed">
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                  </select>
              </div>
      
              <div class="form-group">
                  <label for="employment_status">Employment Status:</label>
                  <select class="form-control" id="employment_status" name="employment_status">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                  </select>
              </div>
            
        
                <div class="form-group">
                  <label for="studying">Are you currently studying?</label>
                <select id="studying" name="studying">
                  <option value="studying">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                </div>
        
                <div class="form-group">
                  <label for="computer_access">Do you have access to a computer and the internet?</label>
                  <select id="computer_access" name="computer_access">
                    <option value="select">Select</option>
                      <option value="yes">Yes</option>
                      <option value="no">No</option>
                  </select>
                </div>
                <div class="form-group submit-button">
                  <button type="submit">Update Profile</button>
                </div>
        
                
            </form>
      </div> 
@endsection

@section('scripts')
    <!-- Add your page-specific scripts here -->
       <!-- Vendor JS Files -->
       <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

@endsection


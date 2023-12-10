<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
      <title>Dashboard | By SOP</title>
      <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

      <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* .card {
            width: 800px;
            height: 300px;
        } */

        .card {
            width: 400px;
            margin: auto; /* Center horizontally */
            margin-top: 50px; /* Adjust vertical spacing as needed */
        }
    </style>
</head>
<body>
    @include('layouts.sidebars')
   
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Settings</h3>
        
                <form method="get" action="{{ route('student.settings') }}">
                    @csrf
        
                    <div class="form-group">
                        <label for="language">Languages:</label>
                        <select id="language" name="language" class="form-control">
                            @foreach($languages as $language)
                                <option value="{{ $language }}">{{ $language }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label>Notification Options:</label>
                        @foreach($notifications as $notification)
                            <div class="form-check">
                                <input type="checkbox" name="notifications[]" value="{{ $notification }}" class="form-check-input">
                                <label class="form-check-label">{{ $notification }}</label>
                            </div>
                        @endforeach
                    </div>
        
                    <!-- Add more customization options as needed -->
        
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    



    {{-- <div class="page-wrapper">
        <h3>Settings</h3>

        <form method="post" action="{{ route('student.settings') }}">
            @csrf

            <div>
                <h4>Languages:</h4>
                <select name="language" class="form-control">
                    @foreach($languages as $language)
                        <option value="{{ $language }}">{{ $language }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <h4>Notification Options:</h4>
                @foreach($notifications as $notification)
                    <div class="form-check">
                        <input type="checkbox" name="notifications[]" value="{{ $notification }}" class="form-check-input">
                        <label class="form-check-label">{{ $notification }}</label>
                    </div>
                @endforeach
            </div>

            <!-- Add more customization options as needed -->

            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div> --}}
   
    
   
   
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Settings</div>
    
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
    
                        <form method="POST" action="{{ route('student.settings') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="language" class="col-md-4 col-form-label text-md-right">{{ __('Language') }}</label>
    
                                <div class="col-md-6">
                                    <select id="language" name="language" class="form-control @error('language') is-invalid @enderror">
                                        @foreach (config('app.locales') as $locale => $label)
                                            <option value="{{ $locale }}" @selected($locale == $settings->language)>{{ $label }}</option>
                                        @endforeach
                                    </select>
    
                                    @error('language')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="theme" class="col-md-4 col-form-label text-md-right">{{ __('Theme') }}</label>
    
                                <div class="col-md-6">
                                    <select id="theme" name="theme" class="form-control @error('theme') is-invalid @enderror">
                                        @foreach (config('app.themes') as $theme => $label)
                                            <option value="{{ $theme }}" @selected($theme == $settings->theme)>{{ $label }}</option>
                                        @endforeach
                                    </select>
    
                                    @error('theme')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="notifications" class="col-md-4 col-form-label text-md-right">{{ __('Notifications') }}</label>
    
                                <div class="col-md-6">
                                    <input id="notifications" name="notifications" type="checkbox" class="form-check-input @error('notifications') is-invalid @enderror" @checked($settings->notifications)>
    
                                    @error('notifications')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save Settings') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
{{-- @section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Settings</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('student.settings') }}">Settings</a></li>
                            <li class="breadcrumb-item active">General Settings</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Website Basic Details</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form>
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Website Name <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Website Name">
                                    </div>
                                    <div class="form-group">
                                        <p class="settings-label">Logo <span class="star-red">*</span></p>
                                        <div class="settings-btn">
                                            <input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">
                                                <i class="feather-upload"></i>
                                            </label>
                                        </div>
                                        <h6 class="settings-size">Recommended image size is <span>150px x
                                                150px</span></h6>
                                        <div class="upload-images">
                                            <img src="{{ URL::to('assets/img/logo.png') }}" alt="Image">
                                            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                <i class="feather-x-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                        <div class="settings-btn">
                                            <input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">
                                                <i class="feather-upload"></i>
                                            </label>
                                        </div>
                                        <h6 class="settings-size">
                                            Recommended image size is <span>16px x 16px or 32px x 32px</span>
                                        </h6>
                                        <h6 class="settings-size mt-1">Accepted formats: only png and ico</h6>
                                        <div class="upload-images upload-size">
                                            <img src="{{ URL::to('assets/img/favicon.png') }}" alt="Image">
                                            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                <i class="feather-x-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="form-group">
                                                <div
                                                    class="status-toggle d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">RTL</p>
                                                    <input type="checkbox" id="status_1" class="check">
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" class="btn btn-orange">Update</button>
                                            <button type="submit" class="btn btn-grey">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Address Details</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form>
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Address Line 1 <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Address Line 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Address Line 2 <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Address Line 2">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City <span class="star-red">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State/Province <span class="star-red">*</span></label>
                                                <select class="select form-control">
                                                    <option selected="selected">Select</option>
                                                    <option>California</option>
                                                    <option>Tasmania</option>
                                                    <option>Auckland</option>
                                                    <option>Marlborough</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip/Postal Code <span class="star-red">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country <span class="star-red">*</span></label>
                                                <select class="select form-control">
                                                    <option selected="selected">Select</option>
                                                    <option>India</option>
                                                    <option>London</option>
                                                    <option>France</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" class="btn btn-orange">Update</button>
                                            <button type="submit" class="btn btn-grey">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
</body>
</html>
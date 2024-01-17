<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SOPS - Error 404</title>

<link rel="shortcut icon" href="{{asset ('/img/SOPS.png')}}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/css/style32.css')}}">
</head>
<body class="error-page">

    <div class="main-wrapper">
        <div class="error-box">
            <h1>404</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Oops! Page not found!</h3>
            <p class="h4 font-weight-normal">The page you requested was not found.</p>
            <a href="{{ route('instructor.dashboard') }}" class="btn btn-primary">Back to Home</a>
        </div>
    </div>

    <script src="{{asset ('/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('/js/script.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Frequently Asked Questions section - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/help.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>


  <div class="container">
        <!--Header Navbar Start-->
        @include('layouts.studentnav')
        <!--Header Navbar End-->
    
        {{-- Sidebar Start --}}
        @include('layouts.studentside')
        {{-- Sidebar Ends --}}
   

        <div class="faq-header">Frequently Asked Questions</div>

        <div class="faq-content">
            @foreach ($faqs as $faq)
                <div class="faq-question">
                    <input id="q{{ $faq->id }}" type="checkbox" class="panel">
                    <div class="plus">+</div>
                    <label for="q{{ $faq->id }}" class="panel-title">{{ $faq->question }}</label>
                    <div class="panel-content">{{ $faq->answer }}</div>
                </div>
            @endforeach
    
            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <i class="lni-emoji-sad"></i>
                <p class="mb-0 px-2">Can't find your answers?</p>
                <a href="#">Contact us</a>
            </div>
        </div>
</div>

</body>
</html>

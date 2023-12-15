<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Frequently Asked Questions section - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway);

body {
  color: #333;
  background: #fcfcfc;
  font-family: 'Raleway', sans-serif;
  overflow-x: hidden;
}

.faq-header{
  font-size: 42px;
  border-bottom: 1px dotted #ccc;
  padding: 24px;
}

.faq-content {
  margin: 0 auto;
}

.faq-question {
  padding: 20px 0;
  border-bottom: 1px dotted #ccc;
}

.panel-title {
  font-size: 24px;
  width: 100%;
  position: relative;
  margin: 0;
  padding: 10px 10px 0 48px;
  display: block;
  cursor: pointer;
}

.panel-content {
  font-size: 20px;
  padding: 0px 14px;
  margin: 0 40px;
  height: 0;
  overflow: hidden;
  z-index: -1;
  position: relative;
  opacity: 0;
  -webkit-transition: .4s ease;
  -moz-transition: .4s ease;
  -o-transition: .4s ease;
  transition: .4s ease;
}

.panel:checked ~ .panel-content{
  height: auto;
  opacity: 1;
  padding: 14px;
}

.plus {
  position: absolute;
  margin-left: 20px;
  margin-top: 4px;
  z-index: 5;
  font-size: 42px;
  line-height: 100%;
  -webkit-user-select: none;    
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .2s ease;
  -moz-transition: .2s ease;
  -o-transition: .2s ease;
  transition: .2s ease;
}

.panel:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.panel {
  display: none;
}

    </style>
</head>
<body>

    <div class="container">
        <div id="sidebar">
            <!-- Sidebar content goes here -->
            @include('layouts.sidebars')
        </div>
    
        <div class="faq-header">Frequently Asked Questions</div>
    
        <div class="faq-content">
          <div class="faq-question">
            <input id="q1" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q1" class="panel-title">What is the meaning of life?</label>
            <div class="panel-content">Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</div>
          </div>
          
          <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
            <div class="panel-content">Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</div>
          </div>

          <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
            <div class="panel-content">Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</div>
          </div>

          <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
            <div class="panel-content">Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</div>
          </div>

          <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
            <div class="panel-content">Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</div>
          </div>
          
          <div class="faq-question">
            <input id="q3" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
          </div>

          <div class="faq-question">
            <input id="q3" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
          </div>

          <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <i class="lni-emoji-sad"></i>
            <p class="mb-0 px-2">Can't find your answers?</p>
            <a href="#"> Contact us</a>
            </div>
        </div>
    </div>
</body>
</html>

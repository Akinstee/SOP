<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SOPS - Dashboard</title>
        <link rel="shortcut icon" href="{{ asset('/img/SOPS.png')}}">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css')}}">
        <link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css')}}">
        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/plugins/simple-calendar/simple-calendar.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/style32.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" /> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    </head>
<body>
    <div class="container">
        @include('layouts.studentnav')
        <!-- Include the content of intro_module.blade.php -->
        <div class="intro-module" style="float: left; width: 70%; padding-right: 20px;">
            <h2>Introductory Module</h2>
    
            <!-- Video Player -->
            <div class="video-player">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
            </div>
    
            <!-- Transcript -->
            <div class="transcript" style="margin-top: 20px;">
                <p>This is a dummy transcript for the introduction to web development video. It provides an overview of key concepts and technologies in the field.</p>
                <!-- Add more transcript content as needed -->
            </div>
    
            <!-- Quiz Section -->
            <div class="quiz" style="margin-top: 20px;">
                <form id="quizForm" action="{{ route('submitQuiz') }}" method="post">
                    @csrf
                    <label onclick="toggleOptions(1)">1. What does HTML stand for?</label>
                    <input type="radio" name="question1" value="a" onclick="toggleOptions(1)"> (a) Hyper Text Markup Language<br>
                    <input type="radio" name="question1" value="b" onclick="toggleOptions(1)"> (b) Hyper Transfer Markup Language<br>
                    <!-- Add more questions and options as needed -->
    
                    <button type="button" onclick="submitQuizAsync()">Submit Quiz</button>
                </form>
            </div>
    
            <!-- Messaging Section -->
            <div class="messaging" style="margin-top: 20px;">
                <h3>Message Instructor</h3>
                <form action="{{ route('sendMessage') }}" method="post">
                    @csrf
                    <textarea name="message" rows="4" cols="50" placeholder="Type your message here"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    
        <div class="main-course" style="float: right; width: 30%;">
            <h1>My courses</h1>
    
            <div class="course-box">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li class="active">In progress</li>
                    <li>Finished</li>
                </ul>
                <div class="course">
                    <div class="box">
                        <h3>HTML</h3>
                        <p>80% - progress</p>
                        <button><a href="{{ route('students.introModule') }}">continue</a></button>
                        <i class="fab fa-html5 html"></i>
                    </div>
                    <div class="box">
                        <h3>CSS</h3>
                        <p>50% - progress</p>
                        <button><a href="{{ route('students.introModule') }}">continue</a></button>
                        <i class="fab fa-css3-alt css"></i>
                    </div>
                    <div class="box">
                        <h3>JavaScript</h3>
                        <p>30% - progress</p>
                        <button><a href="{{ route('students.introModule') }}">continue</a></button>
                        <i class="fab fa-js-square js"></i>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
    
    <script>
        // Example JavaScript forinteractivit
    
        // Function to toggle quiz options
        function toggleOptions(questionNumber) {
            var options = document.querySelectorAll('input[name="question' + questionNumber + '"]');
            options.forEach(function (option) {
                option.toggleAttribute('disabled');
            });
        }
    
        // Example AJAX function for submitting quiz asynchronously
        function submitQuizAsync() {
            var form = document.querySelector('#quizForm');
    
            // Assuming you have the axios library included for AJAX requests
            axios.post(form.action, new FormData(form))
                .then(function (response) {
                    // Handle success, update UI as needed
                    console.log(response.data);
                })
                .catch(function (error) {
                    // Handle errors
                    console.error(error);
                });
        }
    </script>
    <script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('/js/feather.min.js')}}"></script>

    <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{ asset('/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('/plugins/apexchart/chart-data.js')}}"></script>

    <script src="{{ asset('/plugins/simple-calendar/jquery.simple-calendar.js')}}"></script>
    <script src="{{ asset('/js/calander.js')}}"></script>

    <script src="{{ asset('/js/circle-progress.min.js')}}"></script>

    <script src="{{ asset('/js/script.js')}}"></script>
</body>
</html>
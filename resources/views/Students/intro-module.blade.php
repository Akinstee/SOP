<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{-- <section class="intro-module">
            <h2>Introductory Module</h2>
    
            <!-- Video Player -->
            <div class="video-player">
                <!-- Your video player code goes here -->
            </div>
    
            <!-- Transcript -->
            <div class="transcript">
                <!-- Transcript content goes here -->
            </div>
    
            <!-- Quiz Section -->
            <div class="quiz">
                <!-- Quiz questions and options go here -->
                <!-- Add a form for submitting quiz answers -->
                <form action="{{ route('submitQuiz') }}" method="post">
                    @csrf
                    <!-- Add quiz questions and options input fields here -->
                    <button type="submit">Submit Quiz</button>
                </form>
            </div>
    
            <!-- Messaging Section -->
            <div class="messaging">
                <!-- Messaging features go here -->
            </div>
        </section> --}}


        <section class="main-course">
            <h1>My courses</h1>
    
            <div class="course-box">
                <ul>
                    <li class="active">In progress</li>
                    <li>finished</li>
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
        </section>
    
        <!-- Include the content of intro_module.blade.php -->
        <section class="intro-module">
            <h2>Introductory Module</h2>
    
            <!-- Video Player -->
            <div class="video-player">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
            </div>
    
            <!-- Transcript -->
            <div class="transcript">
                <p>This is a dummy transcript for the introduction to web development video. It provides an overview of key concepts and technologies in the field.</p>
                <!-- Add more transcript content as needed -->
            </div>
    
            <!-- Quiz Section -->
            <div class="quiz">
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
            <div class="messaging">
                <h3>Message Instructor</h3>
                <form action="{{ route('sendMessage') }}" method="post">
                    @csrf
                    <textarea name="message" rows="4" cols="50" placeholder="Type your message here"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    
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

    </div>
</body>
</html>
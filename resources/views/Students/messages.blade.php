<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/message.css') }}">
    <title>Student Messages</title>
</head>
<body>

    <div class="container">
        @include('layouts.sidebars')
        <div class="chat-container">
            @foreach ($messagesFromDB as $message)
                <div class="chat-message {{ $message->sender }}">
                    <p><strong>{{ $message->student_name }}:</strong> {{ $message->content }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

<!-- resources/views/notifications.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    <title>Student Notifications</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        @include('layouts.sidebars')
        <div class="notification-container">
            @foreach ($notifications as $notification)
                <div class="notification {{ $notification->type }}" data-notification-id="{{ $notification->id }}">
                    <p>{{ $notification->message }}</p>
                    <button class="close-btn" onclick="deleteNotification({{ $notification->id }})">&times;</button>
                </div>
            @endforeach
            <button class="close-bar-btn" onclick="closeNotificationBar()">&times;</button>
        </div>
    </div>

    <script>
        function deleteNotification(notificationId) {
            // You can send an AJAX request to delete the notification from the database
            // For simplicity, let's just remove the notification from the view
            const notificationElement = document.querySelector(`.notification[data-notification-id="${notificationId}"]`);
            if (notificationElement) {
                notificationElement.remove();
            }
        }

        function closeNotificationBar() {
            const notificationContainer = document.querySelector('.notification-container');
            if (notificationContainer) {
                notificationContainer.remove();
            }
        }
    </script>

</body>
</html>

<!-- resources/views/notifications.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    <title>Student Notifications</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.notification-container {
    position: fixed;
    top: 20px;
    right: 20px;
    max-width: 300px;
}

.notification {
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.notification.success {
    background-color: #4caf50; /* Green */
    color: #fff;
}

.notification.error {
    background-color: #f44336; /* Red */
    color: #fff;
}

.close-btn {
    background: none;
    border: none;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}
    </style>
</head>
<body>

    <div class="notification-container">
        @foreach ($notifications as $notification)
            <div class="notification {{ $notification->type }}" data-notification-id="{{ $notification->id }}">
                <p>{{ $notification->message }}</p>
                <button class="close-btn" onclick="deleteNotification({{ $notification->id }})">&times;</button>
            </div>
        @endforeach
        <button class="close-bar-btn" onclick="closeNotificationBar()">&times;</button>
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

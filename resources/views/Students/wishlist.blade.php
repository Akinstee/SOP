<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/wishlist.css') }}">
    <title>Laravel LMS Wishlist</title>
</head>
<body>

    <div class="wishlist-container">
        <h1>My Wishlist</h1>

        @foreach ($courses as $course)
            <div class="wishlist-item">
                <img src="{{ asset($course['image']) }}" alt="{{ $course['name'] }}">
                <div class="item-details">
                    <h2>{{ $course['name'] }}</h2>
                    <p>{{ $course['description'] }}</p>
                    <p class="price">${{ $course['price'] }}</p>
                    <button class="remove-btn">Remove</button>
                </div>
            </div>
        @endforeach

    </div>

</body>
</html>

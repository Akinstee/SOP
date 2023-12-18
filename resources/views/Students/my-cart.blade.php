<!-- resources/views/my_cart.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>My Cart</title>
</head>
<body>
    
    <div class="container">
        @include('layouts.sidebars')

        <div class="cart-container">
            <div class="cart-header">
                <h1>My Cart</h1>
                <p>Number of Courses: {{ $cartItems->count() }}</p>
            </div>
    
            <p class="cart-count-info">Number of Courses: {{ $cartItems->count() }}</p>
    
            <div class="courses-container">
                @foreach ($cartItems as $cartItem)
                    <div class="course">
                        <img src="{{ asset('course_images/' . $cartItem->id . '.jpg') }}" alt="{{ $cartItem->name }} Image">
                        <h2>{{ $cartItem->name }}</h2>
                        <p>Author: {{ $cartItem->author }}</p>
                        <p>Rating: {{ $cartItem->rating }}</p>
                        <p>Price: ${{ $cartItem->price }}</p>
                        <div class="action-buttons">
                            <button class="remove-btn">Remove</button>
                            <button class="save-btn">Save for Later</button>
                            <button class="wishlist-btn">Move to Wishlist</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        
        {{-- <div class="courses-container">
            
            <div class="cart-header">
                <h1>My Cart</h1>
                <h3> <b> Number of Courses: {{ $cartItems->count() }} Courses: </b></h3>
            </div>

    
            @foreach ($cartItems as $cartItem)
                <div class="course">
                    <img src="{{ asset('course_images/' . $cartItem->id . '.jpg') }}" alt="{{ $cartItem->name }} Image">
                    <h2>{{ $cartItem->name }}</h2>
                    <p>Author: {{ $cartItem->author }}</p>
                    <p>Rating: {{ $cartItem->rating }}</p>
                    <p>Price: ${{ $cartItem->price }}</p>
                    <div class="action-buttons">
                        <button class="remove-btn">Remove</button>
                        <button class="save-btn">Save for Later</button>
                        <button class="wishlist-btn">Move to Wishlist</button>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>

</body>
</html>

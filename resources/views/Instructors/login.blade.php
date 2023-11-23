<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <style>
        body {
            background-color: #ffdab9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
        }

        .form-group {
            margin-top: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .remember-me {
            display: grid;
            align-items: center;
            margin-top: 7px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .password-link {
            text-align: right;
            margin-top: 10px;
            font-size: 14px;
        }

        .password-link a {
            color: #3490dc; /* Blue link color */
            text-decoration: none;
        }

        .password-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <form method="POST" action="{{ route('instructor.check') }}">
            @csrf
            <h2>SOPS Login</h2>

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email') <span style="color: #ff0000;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password') <span style="color: #ff0000;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group remember-me">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember me</label>
            </div>

            <div class="form-group">
                <button type="submit">{{ __('Login') }}</button>
            </div>

            <div class="password-link">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div>
        </form>
    </div>
</body>

</html>

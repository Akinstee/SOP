<!-- resources/views/login.blade.php -->

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <h2 class="text-center"><b>SOPS Student Login</b></h2>
        <p className="mb-6">Please enter your user information.</p>

        <div class="mt-4">
            <label for="email">Email:</label>
            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus />
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="password">Password:</label>
            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember me</label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="ml-4 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </div>
</form>

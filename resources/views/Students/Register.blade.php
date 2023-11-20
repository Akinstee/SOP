<!-- resources/views/register.blade.php -->

<form method="POST" action="{{ route('student.save') }}">
    @csrf

    <div>
        <h2 class="text-center"><b>SOPS Registration Form</b></h2>

        <div class="mt-4">
            <label for="firstname">First Name:</label>
            <input id="firstname" class="block mt-1 w-full" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus autocomplete="firstname" />
            @error('first_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="lastname">Last Name:</label>
            <input id="lastname" class="block mt-1 w-full" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus autocomplete="lastname" />
            @error('last_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="block mt-1 w-full" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mt-4">
            <label for="password">Password</label>
            <input type="password" id="password" class="block mt-1 w-full" name="password" value="{{ old('password') }}" placeholder="Password" required>
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mt-4">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" class="block mt-1 w-full" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required>
            @error('password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="gender">Gender:</label>
            <select name="gender" value="{{ old('gender') }}" class="block mt-1 w-full" id="gender">
                <option value="gender">Select Your Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" class="block mt-1 w-full" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
            @error('date_of_birth') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="phone_number">Phone Number</label>
            <input type="tel" id="phone_number" class="block mt-1 w-full" name="phone_number" value="{{ old('phone_number') }}" required>
            @error('phone_number') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="available_on_whatsapp">Available on WhatsApp?</label>
            <select name="available_on_whatsapp" value="{{ old('available_on_whatsapp') }}" id="available_on_whatsapp" class="block mt-1 w-full" required>
                <option value="select_availability">Select Availability</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            @error('available_on_whatsapp') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="city_from">Which city are you from?</label>
            <select id="city_from" name="city_from" value="{{ old('city_from') }}" class="block mt-1 w-full" required>
                <option value="city_from">Select Your City</option>
                <option value="yes">Lagos</option>
                <option value="no">Abuja</option>
                <option value="no">Port-Harcout</option>
                <option value="no">Enugu</option>
                <option value="no">Asaba</option>
                <option value="no">Ibadan</option>
                <option value="no">Kano</option>
                <option value="no">Kaduna</option>
                <option value="no">Kwara</option>
                <option value="no">Jos</option>
            </select>
            @error('city_from') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="city_currently_living_in">Which city do you currently live in?</label>
            <select id="city_currently_living_in" name="city_currently_living_in" value="{{ old('city_currently_living_in') }}" class="block mt-1 w-full" required>
                <option value="city_currently_living_in">Your Current City</option>
                <option value="yes">Lagos</option>
                <option value="no">Abuja</option>
                <option value="no">Port-Harcout</option>
                <option value="no">Enugu</option>
                <option value="no">Asaba</option>
                <option value="no">Ibadan</option>
                <option value="no">Kano</option>
                <option value="no">Kaduna</option>
                <option value="no">Kwara</option>
                <option value="no">Jos</option>
            </select>
            @error('city_currently_living_in') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="employed">Are you currently employed?</label>
            <select name="employed" id="employed" value="{{ old('employed') }}" class="block mt-1 w-full" required>
                <option value="employment_status">Employment Status</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            @error('employed') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="study_status">Are you currently studying?</label>
            <select name="study_status" value="{{ old('study_status') }}" id="study_status" class="block mt-1 w-full" required>
                <option value="study_status">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            @error('study_status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="has_computer_and_internet">Do you have access to a computer and the internet?</label>
            <select name="has_computer_and_internet" value="{{ old('has_computer_and_internet') }}" id="has_computer_and_internet" class="block mt-1 w-full" required>
                <option value="has_computer_and_internet">Select</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            @error('has_computer_and_internet') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="skill_experience">Skill of Interest Experience?</label>
            <select name="skill_experience" value="{{ old('skill_experience') }}" id="skill_experience" class="block mt-1 w-full" required>
                <option value="skill_experience">Selct</option>
                <option value="none">None</option>
                <option value="basic">Basic</option>
                <option value="intermediate">Intermediate</option>
                <option value="advance">Advance</option>
            </select>
            @error('skill_experience') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="acknowledge_terms_and_privacy"><b>Acknowledge:</b></label>
            <input type="checkbox" name="acknowledge_terms_and_privacy" value="{{ old('acknowledge_terms_and_privacy') }}" id="acknowledge_terms_and_privacy">
            <span class="ml-2 text-sm text-gray-600">Yes, I have read and accepted the terms of use and privacy policy.</span>
            @error('acknowledge_terms_and_privacy') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="contact_me_about_application">Contact me about my application process:</label>
            <input type="checkbox" name="contact_me_about_application" value="{{ old('contact_me_about_application') }}" id="contact_me_about_application">
            <span class="ml-2 text-sm text-gray-600">Yes. Contact me about my application process.</span>
            @error('contact_me_about_application') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="ms-4">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>

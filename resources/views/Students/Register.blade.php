<!-- resources/views/register.blade.php -->

<form method="POST" action="{{ route('students.store') }}">
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

        <div class="mb-3">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Email Address" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>           
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>        
        </div>   
        <div class="mb-3">           
            <label for="password_confirmation">Confirm Password</label>           
            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>      
        </div>

        <div class="mt-4">
            <label for="gender">Gender:</label>
            <select name="gender" class="block mt-1 w-full" id="gender">
                <option value="gender">Select Your Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" required>
        </div>

        <div class="mb-3">
            <label for="phone_number">Phone Number</label>
            <input type="tel" id="phone_number" class="form-control" name="phone_number" required>
        </div>

        <div class="mb-3">
            <label for="available_on_whatsapp">Available on WhatsApp?</label>
            <select name="available_on_whatsapp" id="available_on_whatsapp" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="city_from">Which city are you from?</label>
            <select id="city_from" name="city_from" class="form-control" required>
                </select>
        </div>

        <div class="mb-3">
            <label for="city_currently_living_in">Which city do you currently live in?</label>
            <select id="city_currently_living_in" name="city_currently_living_in" class="form-control" required>
                </select>
        </div>

        <div class="mb-3">
            <label for="employed">Are you currently employed?</label>
            <select name="employed" id="employed" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="study_status">Are you currently studying?</label>
            <select name="study_status" id="study_status" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="has_computer_and_internet">Do you have access to a computer and the internet?</label>
            <select name="has_computer_and_internet" id="has_computer_and_internet" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="skill_experience">Skill of Interest Experience?</label>
            <select name="skill_experience" id="skill_experience" class="form-control" required>
                <option value="none">None</option>
                <option value="basic">Basic</option>
                <option value="intermediate">Intermediate</option>
                <option value="advance">Advance</option>
            </select>
        </div>
        <!-- ... repeat the above pattern for other form fields ... -->

        <div class="mt-4">
            <label for="acknowledge_terms_and_privacy"><b>Acknowledge:</b></label>
            <input type="checkbox" name="acknowledge_terms_and_privacy" id="acknowledge_terms_and_privacy">
            <span class="ml-2 text-sm text-gray-600">Yes, I have read and accepted the terms of use and privacy policy.</span>
            @error('acknowledge_terms_and_privacy') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <label for="contact_me_about_application">Contact me about my application process:</label>
            <input type="checkbox" name="contact_me_about_application" id="contact_me_about_application">
            <span class="ml-2 text-sm text-gray-600">Yes. Contact me about my application process.</span>
            @error('contact_me_about_application') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- ... repeat the above pattern for other form fields ... -->

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

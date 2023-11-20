@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Instructor Registration Form</h1>

    <form method="post" action="{{ route('instructor.save') }}">
        @csrf

        <div class="mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
        </div>

        <div class="mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
        </div>

        <div class="mb-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
        </div>

        <div class="mb-3">
            <label for="phone_number">Phone Number</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
        </div>

        <div class="mb-3">
            <label for="highest_qualification">Highest Qualification</label>
            <select name="highest_qualification" id="highest_qualification" class="form-control" required>
                <option value="bsc">BSc</option>
                <option value="msc">MSc</option>
                <option value="phd">PhD</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="years_of_experience">Years of Experience</label>
            <input type="number" class="form-control" id="years_of_experience" name="years_of_experience" placeholder="Years of Experience" required>
        </div>

        <div class="mb-3">
            <label for="areas_of_expertise">Areas of Expertise</label>
            <select name="areas_of_expertise[]" id="areas_of_expertise" class="form-control" multiple required>
                <option value="web_development">Web Development</option>
                <option value="mobile_development">Mobile Development</option>
                <option value="data_science">Data Science</option>
                <option value="digital_marketing">Digital Marketing</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="curriculum_vitae">Curriculum Vitae</label>
            <input type="file" class="form-control" id="curriculum_vitae" name="curriculum_vitae" required>
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection

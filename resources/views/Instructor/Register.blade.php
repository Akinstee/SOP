<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            height: 34px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Instructor Registration Form</h1>

        <form method="post" action="{{ route('instructor.save') }}">
            @csrf

            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>

            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>

            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>

            <label for="phone_number">Phone Number</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>

            <label for="highest_qualification">Highest Qualification</label>
            <select name="highest_qualification" id="highest_qualification" class="form-control" required>
                <option value="bsc">BSc</option>
                <option value="msc">MSc</option>
                <option value="phd">PhD</option>
                <option value="other">Other</option>
            </select>

            <label for="years_of_experience">Years of Experience</label>
            <input type="number" class="form-control" id="years_of_experience" name="years_of_experience"
                placeholder="Years of Experience" required>

            <label for="areas_of_expertise">Areas of Expertise</label>
            <select name="areas_of_expertise[]" id="areas_of_expertise" class="form-control" multiple required>
                <option value="web_development">Web Development</option>
                <option value="mobile_development">Mobile Development</option>
                <option value="data_science">Data Science</option>
                <option value="digital_marketing">Digital Marketing</option>
            </select>

            <label for="curriculum_vitae">Curriculum Vitae</label>
            <input type="file" class="form-control" id="curriculum_vitae" name="curriculum_vitae" required>

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Confirm Password" required>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>

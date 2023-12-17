<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        return view("Students.register");
    }

    public function showRegistrationForm()
    {
        return view('students.registration_form');
    }

    public function save(Request $request)
    {
        if ($request['password'] == $request['password_confirmation']) {
            $request['password'] = Hash::make($request->input('password'));
            // dd($request['password']);

            $validator = Validator::make($request->all(), [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
                'password' => 'required|string|min:8',
                'gender' => ['required'],
                'date_of_birth' => ['required', 'date'],
                'phone_number' => ['required', 'string', 'max:20'],
                'available_on_whatsapp' => ['required'],
                'city_from' => ['required', 'string', 'max:255'],
                'city_currently_living_in' => ['required', 'string', 'max:255'],
                'employed' => ['required'],
                'study_status' => ['required'],
                'has_computer_and_internet' => ['required'],
                'skill_experience' => ['required'],
                // 'how_did_you_hear_about_us' => ['required'],
                'acknowledge_terms_and_privacy' => ['required'],
                'contact_me_about_application' => ['required'],
            ]);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // If validation passes, create a new student instance
            // dd($validator->validated()['password']);
            $student = Student::create($validator->validated());

            // Send confirmation email or perform other actions

            return redirect()->back()->with('success', 'Student registered successfully!');
        } else {
            return redirect()->back()->with('fail', 'passwords dont match')->withInput();
        }

        // Validate the incoming data
    }


    public function dashboard()
    {
        return view('Students.dashboard');
    }

    public function liveClass()
    {
        // Your logic for the live class page
        return view('students.live_class');
    }

    public function myCertificate()
    {
        // Your logic for the my certificate page
        return view('students.my_certificate');
    }

    public function myCourses()
    {
        // Your logic for the my courses page
        return view('students.my_courses');
    }

    public function messages()
    {
        return view('students.messages');
    }

    // public function wishlist()
    // {
    //     return view('students.wishlist');
    // }

    public function wishlist()
    {
        $courses = [
            [
                'name' => 'Introduction to Web Development',
                'description' => 'Learn the basics of web development.',
                'price' => 49.99,
                'image' => 'images/course1.jpg',
            ],
            [
                'name' => 'Laravel Fundamentals',
                'description' => 'Learn the basics ofLaravel 10.',
                'price' => 99.99,
                'image' => 'images/course1.jpg',
            ],
            [
                'name' => 'Introduction to Web3 ',
                'description' => 'Learn the basics of web 3.',
                'price' => 99.99,
                'image' => 'images/course1.jpg',
            ],
            // Add more courses as needed
        ];

        return view('students.wishlist', compact('courses'));
    }

    public function profile()
    {
        $user = Auth::user();
        $user_status = null; // Adjust this based on the actual logic for user status

        return view('students.profile', [
            'user' => $user,
            'user_status' => $user_status,
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Implement the logic to update the user's profile
        // You can use $request->input('cf_handle'), $request->input('old'), etc.

        return redirect()->route('students.profile')->with('success', 'Profile updated successfully.');
    }

    public function updateProfileImage(Request $request)
    {
        $user = Auth::user();

        // Check if the user is not null before accessing the 'avatar' property
        if ($user) {
            // Validate the uploaded file
            $request->validate([
                'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            ]);

            // Handle file upload
            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatarPath = $avatar->store('avatars', 'public'); // Store the file in the 'public/avatars' directory
                // Update the user's 'avatar' property with the file path
                $user->avatar = $avatarPath;
                $user->save();
            }

            return redirect()->route('students.profile')->with('success', 'Profile image updated successfully.');
        } else {
            // Handle the case where the user is null (optional: redirect to login or show an error message)
            return redirect()->route('login')->with('failure', 'User not authenticated.');
        }
    }

    public function editProfile()
    {
        return view('students.edit_profile');
    }

    public function wallet()
    {
        return view('students.wallet');
    }

    public function analytics()
    {
        return view('students.analytics');
    }

    // public function settings()
    // {
    //     return view('students.settings');
    // }


    public function settings(Request $request)
    {
        // Validate and save user preferences (replace with your logic)
        $languages = ['en', 'es', 'fr']; // Example array of supported languages
        $notifications = ['email', 'sms', 'push'];

        // Save preferences to the database or other storage method

        // Redirect back to the settings page with a success message
        //return redirect()->route('student.settings')->with('success', 'Settings saved successfully!');
        return view('students.settings', [
            'languages' => $languages,
            'notifications' => $notifications,
        ]);
    }

    public function help()
    
    {
        return view('students.help');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); // Replace 'home' with your desired redirect path
    }
}

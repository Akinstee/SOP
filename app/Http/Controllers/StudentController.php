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

    // public function profile()
    // {
    //     return view('students.profile');
    // }

    // public function show(Student $student)
    // {
    //     return view('student.profile', compact('student'));
    // }

    public function profile()
    {
        // Fetch necessary data (replace with your logic)
        $user = auth()->user();
        $user_status = '?';

        if ($user) {
            // Return the view with data
            return view('student.profile', [
                'user' => $user,
                'user_status' => $user_status,
            ]);
        } else {
            // Redirect to the dashboard when $user is null
            return redirect()->route('student.dashboard'); // Replace 'dashboard' with your actual dashboard route
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

    // public function settings()
    // {
    //     // Fetch necessary data or settings (replace with your logic)
    //     $languages = ['en', 'es', 'fr']; // Example array of supported languages
    //     $notifications = ['email', 'sms', 'push']; // Example array of notification options

    //     // You can use session or other storage methods for user-specific settings
    //     // Here, we're using the session to temporarily store user-specific settings
    //     session([
    //         'languages' => $languages,
    //         'notifications' => $notifications,
    //     ]);

    //     return view('students.settings', [
    //         'languages' => $languages,
    //         'notifications' => $notifications,
    //     ]);
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

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); // Replace 'home' with your desired redirect path
    }
}

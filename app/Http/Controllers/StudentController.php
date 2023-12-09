<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => 'required|string|min:8|confirmed',
            'gender' => ['required', 'in:male,female'],
            'date_of_birth' => ['required', 'date'],
            'phone_number' => ['required', 'string', 'max:20'],
            'available_on_whatsapp' => ['required', 'in:yes,no'],
            'city_from' => ['required', 'string', 'max:255'],
            'current_city' => ['required', 'string', 'max:255'],
            'employment_status' => ['required', 'in:full_time,part_time,unemployed'],
            'study_status' => ['required', 'in:full_time,part_time,not_studying'],
            'has_computer_and_internet' => ['required', 'in:yes,no'],
            'skill_experience' => ['required', 'in:none,basic,intermediate,advance'],
            'how_did_you_hear_about_us' => ['required', 'in:from_a_friend,whatsapp_group,facebook,x,instagram'],
            'acknowledge_terms_and_privacy' => ['required', 'accepted'],
            'contact_me_about_application' => ['required', 'in:yes,no'],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, create a new student instance
        $student = Student::create($validator->validated());

        // Send confirmation email or perform other actions

        return redirect()->back()->with('success', 'Student registered successfully!');
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

    public function settings()
    {
        return view('students.settings');
    }


    
}

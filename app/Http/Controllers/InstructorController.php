<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Invoice;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class InstructorController extends Controller
{
    public function index()
    {
        return view('instructor.register');
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructors',
            'phone_number' => 'required|string',
            'highest_qualification' => 'required|string',
            'years_of_experience' => 'required|integer',
            'areas_of_expertise' => 'required|array',
            'curriculum_vitae' => 'required|file',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle file upload for curriculum vitae
        $curriculumVitaePath = $request->file('curriculum_vitae')->store('curriculum_vitae', 'public');

        Instructor::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'highest_qualification' => $request->input('highest_qualification'),
            'years_of_experience' => $request->input('years_of_experience'),
            'areas_of_expertise' => $request->input('areas_of_expertise'),
            'curriculum_vitae' => $curriculumVitaePath,
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect or perform any additional logic after registration
        return redirect()->route('instructor.login')->with('success', 'Registration successful!');
    }

    public function instructorCheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Check if the authenticated user has the 'instructor' role
            if (auth()->user()->hasRole('instructor')) {
                // Redirect to the instructor dashboard
                return redirect()->route('instructor.dashboard');
            }

            // If the user is not an instructor, log them out and show an error message
            Auth::logout();
            return redirect()->route('instructor.login')->withInput($request->only('email'))->withErrors(['email' => 'You do not have instructor access.']);
        }

        // If login fails, redirect back with an error message
        return redirect()->route('instructor.login')->withInput($request->only('email'))->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard()
    {
        return view('instructor.dashboard');
    }

    public function instructorLogin()
    {
        return view('instructor.login');
    }

    public function courses()
    {
        // Your controller logic for the 'Courses' menu item
        // Fetching data from the database
        $courses = Course::all();

        // Returning the 'courses.blade.php' view with the data
        return view('instructor.courses', ['courses' => $courses]);
    }

    public function invoices()
    {
        // Your controller logic for the 'Invoices' menu item
        // Fetching data from the database
        $invoices = Invoice::all();

        // Returning the 'invoices.blade.php' view with the data
        return view('instructor.invoices', ['invoices' => $invoices]);
    }

    public function settings()
    {
        // Your controller logic for the 'Settings' menu item
        // This can be any logic specific to settings
        // Returning the 'settings.blade.php' view
        return view('instructor.settings');
    }

    // Example method for the 'Login' menu item
    public function loginForm()
    {
        // Your controller logic for the 'Login' menu item
        // This might be a simple login form without specific data
        // Returning the 'login.blade.php' view
        return view('instructor.login');
    }

    // Example method for the 'Forgot Password' menu item
    public function forgotPasswordForm()
    {
        // Your controller logic for the 'Forgot Password' menu item
        // This might be a simple forgot password form without specific data
        // Returning the 'forgot-password.blade.php' view
        return view('instructor.forgot-password');
    }

    // Example method for the 'Error Page' menu item
    public function errorPage()
    {
        // Your controller logic for the 'Error Page' menu item
        // This might be a simple error page without specific data
        // Returning the 'error-404.blade.php' view
        return view('instructor.error-404');
    }

    public function liveClass()
    {
        return view('instructor.live-class');
    }
    
    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); // Replace 'home' with your desired redirect path
    }

}







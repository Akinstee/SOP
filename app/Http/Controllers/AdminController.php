<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function submit(Request $request)
    {
        // Handle form submission and database interaction here
        // Example: Save data to the database
        Admin::create($request->all());

        // Redirect back or to a different page after submission
        return redirect()->route('admin.dashboard')->with('success', 'Data submitted successfully!');
    }
    

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Check if the authenticated user has the 'admin' role
            if (auth()->user()->hasRole('admin')) {
                // Redirect to the admin dashboard
                return redirect()->route('admin.dashboard');
            }

            // If the user is not an admin, log them out and show an error message
            Auth::logout();
            return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'You do not have admin access.']);
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Invalid credentials.']);
    }



    public function students()
    {
        return view('admin.students');
    }

    public function studentDetails()
    {
        return view('admin.student-details');
    }

    public function addStudent()
    {
        return view('admin.add-student');
    }

    public function editStudent()
    {
        return view('admin.edit-student');
    }

    public function instructors()
    {
        return view('admin.instructors');
    }

    public function instructorDetails()
    {
        return view('admin.instructor-details');
    }

    public function addInstructor()
    {
        return view('admin.add-instructor');
    }

    public function editInstructor()
    {
        return view('admin.edit-instructor');
    }

    public function courses()
    {
        return view('admin.courses');
    }

    public function addCourse()
    {
        return view('admin.add-course');
    }

    public function editCourses()
    {
        return view('admin.edit-courses');
    }

    public function invoices()
    {
        return view('admin.invoices');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function liveClass()
    {
        return view('instructor.live-class');
    }

    public function showProfile()
    {
        // Fetch instructor details from the database
        $admin = auth()->user();

        return view('admin.profile', compact('admin'));
    }

    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Update instructor password in the database
        $admin = auth()->user();
        $admin->update([
            'password' => bcrypt($request->input('new_password')),
        ]);

        return redirect()->route('admin.profile.show')->with('success', 'Password changed successfully!');
    }

    public function inbox()
    {
        return view('admin.settings');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); // Replace 'home' with your desired redirect path
    }
}




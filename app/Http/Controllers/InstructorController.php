<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        return view('Instructor.dashboard');
    }

    public function instructorLogin()
    {
        return view('instructor.login');
    }

    
    


}







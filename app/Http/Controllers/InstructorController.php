<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    public function index()
    {
        return view('instructors.register');
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
}







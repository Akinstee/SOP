<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('instructor.courses', compact('courses'));
    }

    public function intro()
    {
        return view('courses.intro');
    }

    public function introVideo()
    {
        return view('courses.introVideo');
    }

    public function css()
    {
        return view('courses.css');
    }

    public function javascript()
    {
        return view('courses.javascript');
    }
    
    public function showForm()
    {
        return view('instructor.add_course');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'course_id' => 'required',
            'course_name' => 'required',
            'course_author' => 'required',
            'course_rating' => 'required',
            'course_price' => 'required',
        ]);

        // Save the data to the database
        Course::create($validatedData);

        return redirect()->route('instructor.courses')->with('success', 'Course added successfully');
    }

    public function showModulesScreen()
    {
        return view('courses.modules');
    }
}
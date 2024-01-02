<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
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
    public function index()
    {
        $courses = Course::all(); // Fetch all courses from the database
        return view('instructor.courses', compact('courses'));
    }

}

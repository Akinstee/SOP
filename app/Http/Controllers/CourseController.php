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

    // Display the form to edit a course
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('instructor.edit-course', compact('course'));
    }

    // Update a course after editing
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     'rating' => 'required|string|max:255',
        //     'price' => 'required|numeric',
        // ]);

        $course = Course::findOrFail($id);
        $course->update([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
            'rating' => $request->input('rating'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('instructor.courses')->with('success', 'Course updated successfully!');
    }

    // Delete a course
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }

    // public function view($id)
    //     {
    //         $course = Course::findOrFail($id);
    //         return view('courses.view', compact('course'));
    //     }

    public function view($id)
    {
        $course = Course::findOrFail($id);
        return view('instructor.view-course', compact('course'));
    }

    
}
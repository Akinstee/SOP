<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // public function manageUsers()
    // {
    //     $users = User::all(); // Retrieve all users from the database
    //     return view('admin.manage_users', compact('users'));
    // }

    // public function deleteUser($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();
    //     return redirect()->route('admin.manage.users')->with('success', 'User deleted successfully');
    // }

    // public function promoteUser($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->role = 'admin'; // Assuming 'admin' is the role for administrators
    //     $user->save();
    //     return redirect()->route('admin.manage.users')->with('success', 'User promoted to admin');
    // }

    // public function demoteUser($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->role = 'user'; // Assuming 'user' is the default role
    //     $user->save();
    //     return redirect()->route('admin.manage.users')->with('success', 'Admin demoted to user');
    // }


    

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->route('admin.dashboard'); // Replace 'dashboard' with your actual dashboard route
        }

        // Authentication failed
        return redirect()->route('admin.dashboard')->with('error', 'Invalid credentials');
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
}




<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Invoice;
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

    // public function studentDetails()
    // {
    //     return view('admin.student-details');
    // }

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

    

    public function courses()
    {
        return view('admin.courses');
    }

    // public function addCourse()
    // {
    //     return view('admin.add-course');
    // }

    public function editCourses()
    {
        return view('admin.edit-courses');
    }

    public function invoices()
    {
        return view('admin.invoices');
    }

    public function addInvoice()
    {
        
        return view('admin.add-invoice'); 
    }

    public function storeInvoice(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'invoice_number' => 'required',
            'amount' => 'required|numeric',
            // Add more validation rules as needed
        ]);

        // Create a new Invoice instance
        $invoice = new Invoice();
        $invoice->invoice_number = $validatedData['invoice_number'];
        $invoice->amount = $validatedData['amount'];
        // Set other properties as needed

        // Save the invoice to the database
        $invoice->save();

        // Redirect or return a response as needed
        return redirect()->route('admin.dashboard')->with('success', 'Invoice stored successfully');
    }

    public function editInvoice()
    {
        return view('admin.edit-invoice');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function liveClass()
    {
        return view('instructor.live-class');
    }

    public function profile()
    {
        // Fetch instructor details from the database
        $admin = auth()->user();

        return view('admin.profile', compact('admin'));
    }

    public function edit()
    {
        
        $admin = auth()->user(); 

        if ($admin) {
            return view('admin.edit', compact('admin'));
        } else {
            return redirect()->route('login'); 
        }

        // return view('admin.edit', compact('admin'));
    }

    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'date',
            'email' => 'required|email|unique:admins,email,' . auth()->id(),
            'mobile' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            
        ]);

        // Update the admin profile
        $admin = auth()->user();
        $admin->update($request->all());

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully!');
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

        return redirect()->route('admin.profile')->with('success', 'Password changed successfully!');
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

    public function instructor()
    {
        return view('admin.instructor');
    }

    public function instructorList()
    {
        // Your logic for the instructor list page
        return view('admin.instructor');
    }

    public function addInstructor()
    {
        // Your logic for the add instructor page
        return view('admin.add-instructor');
    }

    public function editInstructor()
    {
        // Your logic for the edit instructor page
        return view('admin.edit-instructor');
    }



    public function instructorDetails()
    {
        // Your logic for the instructor details page
        return view('admin.instructor-details');
    }

    public function studentDetails()
    {
        // Your logic for the instructor details page
        return view('admin.student-details');
    }
    public function addCourse()
    {
        // Your logic for the instructor details page
        return view('admin.add-course');
    }

    

    public function storeCourse(Request $request)
        {
            // Validate the form data
            $request->validate([
                'course_name' => 'required|string|max:255',
                // Add more validation rules as needed
            ]);

            // Create a new course instance
            $course = new Course();

            // Set the attributes based on the form data
            $course->course_name = $request->input('course_name');
            // Add more attributes as needed

            // Save the course to the database
            $course->save();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Course stored successfully');
        }

    public function forgotPassword()
    {
        // Your logic for the forgot password page
        return view('admin.forgot-password'); // Adjust the view name accordingly
    }


    public function generalSettings()
    {
        // Your logic for the general settings page
        return view('admin.general-settings'); // Adjust the view name accordingly
    }

    public function taxSettings()
    {
        // Your logic for the tax settings page
        return view('admin.tax-settings'); // Adjust the view name accordingly
    }

    public function bankSettings()
    {
        // Your logic for the bank settings page
        return view('admin.bank-settings'); // Adjust the view name accordingly
    }

    public function invoicesSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.invoices-settings'); // Adjust the view name accordingly
        }

    public function localizatioDetails()
        {
            // Your logic for the invoices settings page
            return view('admin.localization-details'); // Adjust the view name accordingly
        }

    public function paymentSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.payment-settings'); // Adjust the view name accordingly
        }

    public function emailSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.email-settings'); // Adjust the view name accordingly
        }

    public function socialSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.social-settings'); // Adjust the view name accordingly
        }

        public function socialLinks()
        {
            // Your logic for the invoices settings page
            return view('admin.social-links'); // Adjust the view name accordingly
        }

        public function seoSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.seo-settings'); // Adjust the view name accordingly
        }

        public function othersSettings()
        {
            // Your logic for the invoices settings page
            return view('admin.others-settings'); // Adjust the view name accordingly
        }

}
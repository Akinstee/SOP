<?php

namespace App\Http\Controllers;
//use function;
use App\Models\Course;
use App\Models\Invoice;
use App\Models\Student;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\InvoiceSettings;
use Symfony\Component\Mime\Email;
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
       
        // $resume = $request->file('curriculum_vitae');
        // $resumeSaveAsName = time() . Auth::id() . "-resume." . 
        //                               $resume->getClientOriginalExtension();
        // $upload_path = 'public/';
        // $resume_url = $upload_path . $resumeSaveAsName;
        // $success = $resume->move($upload_path, $resumeSaveAsName);

        // $Instructo = Instructor::create([
        //     'first_name' => $request['first_name'],
        //     'last_name' => $request->input('last_name'),
        //     'email' => $request['email'],
        //     'phone_number' => $request['phone_number'],
        //     'highest_qualification' => $request['highest_qualification'],
        //     'years_of_experience' => $request['years_of_experience'],
        //     'areas_of_expertise' => $request['areas_of_expertise'],
        //     'curriculum_vitae' => $resume_url,
        //     'password' => Hash::make($request['password']),
        // ]);

        //  dd($Instructo);

        //return dd($request);
        // $validator = Validator::make($request->all(), [
        //     'first_name' => ['required', 'string', 'max:255'],
        //     'last_name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'email', 'max:255', 'unique:instructors'],
        //     'phone_number' => ['required', 'string', 'max:25'],
        //     'highest_qualification' => ['required', 'string'],
        //     'years_of_experience' => ['required', 'integer', 'max:25'],
        //     'areas_of_expertise' => ['required', 'array'],
        //     'curriculum_vitae' => ['required', 'file'],
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        

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
        return redirect()->route('instructor.login')->withInput()->with('success', 'Registration successful!');
    
    }

    public function instructorCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('instructor')->attempt($credentials)) {

            // Authentication passed
            $request->session()->regenerate();

            return redirect()->intended('instructor/dashboard'); // Replace 'dashboard' with your actual dashboard route
        }else{
            return redirect()->back()->with('error', 'Invalid credentials');
        }


        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // if (Auth::attempt($credentials)) {
        //     // Check if the authenticated user has the 'instructor' role
        //     if (auth()->user()->hasRole('instructor')) {
        //         // Redirect to the instructor dashboard
        //         return redirect()->route('instructor.dashboard');
        //     }

        //     // If the user is not an instructor, log them out and show an error message
        //     Auth::logout();
        //     return redirect()->route('instructor.login')->withInput($request->only('email'))->withErrors(['email' => 'You do not have instructor access.']);
        // }

        // // If login fails, redirect back with an error message
        // return redirect()->route('instructor.login')->withInput($request->only('email'))->withErrors(['email' => 'Invalid credentials.']);
    }


    public function dashboard()
    {
        // Fetch data from the database
        $activeCoursesCount = Course::where('status', 'active')->count();
        $paidCoursesCount = Course::where('payment_status', 'paid')->count();
        $freeCoursesCount = Course::where('payment_status', 'free')->count();
        $totalRevenue = Course::sum('revenue');

        // You need to define the logic to fetch data for charts (e.g., using Eloquent)

        // Fetch star students from the database
        $starStudents = Student::orderBy('marks', 'desc')->limit(5)->get();

        // Fetch recent student activities from the database (you need to adjust this)
        $studentActivities = []; // Implement the logic to fetch activities

        // Pass data to the view
        return view('instructor.dashboard', [
            'activeCoursesCount' => $activeCoursesCount,
            'paidCoursesCount' => $paidCoursesCount,
            'freeCoursesCount' => $freeCoursesCount,
            'totalRevenue' => $totalRevenue,
            'starStudents' => $starStudents,
            'studentActivities' => $studentActivities,
        ]);
    }

    public function instructorLogin()
    {
        return view('instructor.login');
    }

    public function courses()
    {
        
        $courses = Course::all();

        
        return view('instructor.courses', ['courses' => $courses]);
    }

    public function invoices()
    {
        $invoices = Invoice::all();

        // Returning the 'invoices.blade.php' view with the data
        return view('instructor.invoices', ['invoices' => $invoices]);
    }

    public function settings()
    {
        return view('instructor.settings');
    }

    // Example method for the 'Login' menu item
    public function loginForm()
    {
        
        return view('instructor.login');
    }

    public function forgotPassword()
    {
        // Your logic for the forgot password page
        return view('instructor.forgot-password'); // Adjust the view name accordingly
    }
    public function addInvoice()
    {
        
        return view('instructor.add-invoice'); 
    }

    public function editInvoice()
    {
        return view('instructor.edit-invoice');
    }

    public function viewInvoice()
    {
        return view('instructor.view-invoice');
    }

    
    public function errorPage()
    {
        
        return view('instructor.error-404');
    }

    public function liveClass()
    {
        return view('instructor.live-class');
    }
    
    public function logout()
    {
        Auth::logout();
        return Redirect::route('index'); 
    }

    public function storeInvoice(Request $request)
    {
        // Validate the form data
        $request->validate([
            'invoice_number' => 'required|string|max:255', // Adjust validation rules as needed
            // Add more validation rules for other fields
        ]);

        // Create a new invoice instance
        $invoice = new Invoice();

        // Set the attributes based on the form data
        $invoice->invoice_number = $request->input('invoice_number');

        
        $invoice->save();

        return redirect()->back()->with('success', 'Invoice stored successfully');
    }

    
    public function inbox()
    {
        return view('instructor.settings');
    }

    public function compose(Request $request)
    {
        // Validate the form data if needed
        $request->validate([
            'sender' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Create a new email instance
        Email::create([
            'sender' => $request->input('sender'),
            'subject' => $request->input('subject'),
            // Add more fields as needed
        ]);

        return redirect()->route('instructor.compose');
    }


    public function showProfile()
    {
        // Fetch instructor details from the database
        $instructor = auth()->user();

        return view('instructor.profile', compact('instructor'));
    }
    public function editProfile()
    {
        // Fetch instructor details from the database
        $instructor = auth()->user();

        return view('instructor.profile', compact('instructor'));
    }

    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        // Update instructor password in the database
        $instructor = auth()->user();
        $instructor->update([
            'password' => bcrypt($request->input('new_password')),
        ]);

        return redirect()->route('instructor.profile.show')->with('success', 'Password changed successfully!');
    }

    public function showSettingsForm()
    {
        // Fetch settings from the database
        $settings = InvoiceSettings::first(); // Adjust the query based on your database structure

        return view('instructor.settings', compact('settings'));
    }

    public function saveSettings(Request $request)
    {
        // Validate the form data
        $request->validate([
            'invoice_status' => 'boolean',
            'invoice_amount' => 'numeric',
            'invoice_number_prefix' => 'string',
            // Add validation rules for other fields
        ]);

        // Save the settings to the database
        $settings = InvoiceSettings::firstOrNew(); // Assuming you have a model named InvoiceSettings
        $settings->invoice_status = $request->input('invoice_status');
        $settings->invoice_amount = $request->input('invoice_amount');
        $settings->invoice_number_prefix = $request->input('invoice_number_prefix');
        // Set other fields accordingly

        $settings->save();

        return redirect()->route('instructor.settings')->with('success', 'Settings saved successfully!');
    }

    public function invoicesSettings()
    {
        return view('instructor.invoices-settings');
    }

    public function showInvoicesSettings()
    {
        return view('instructor.invoices-settings');
    }

    public function taxSettings()
    {
        return view('instructor.tax-settings');
    }

    public function bankSettings()
    {
        return view('instructor.bank-settings');
    }

    public function updateInvoiceSettings(Request $request)
    {
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
   
    public function editCourses()
    {
        return view('instructor.edit-course');
    }

    // public function viewCourses()
    // {
    //     return view('instructor.view-course');
    // }
    public function addCourse()
    {
        $Instructors = Instructor::all()->pluck('id', 'name');
        return view('instructor.add-course', compact('Instructors'));
    }
    public function storeCourse(Request $request)
    {

        $courseData = [
            'name' => $request->input('name'), 
            'author' => $request->input('author'),
            'rating' => $request->input('rating'),
            'price' => $request->input('price'),
        ];

       Course::create($courseData);
        
       return redirect()->route('instructor.courses');
    }

    public function localizatioDetails()
        {
            // Your logic for the invoices settings page
            return view('instructor.localization-details'); // Adjust the view name accordingly
        }

    public function paymentSettings()
        {
            // Your logic for the invoices settings page
            return view('instructor.payment-settings'); // Adjust the view name accordingly
        }

    public function emailSettings()
        {
            // Your logic for the invoices settings page
            return view('instructor.email-settings'); // Adjust the view name accordingly
        }

    public function socialSettings()
        {
            // Your logic for the invoices settings page
            return view('instructor.social-settings'); // Adjust the view name accordingly
        }

        public function socialLinks()
        {
            // Your logic for the invoices settings page
            return view('instructor.social-links'); // Adjust the view name accordingly
        }

        public function seoSettings()
        {
            // Your logic for the invoices settings page
            return view('instructor.seo-settings'); // Adjust the view name accordingly
        }

        public function othersSettings()
        {
            // Your logic for the invoices settings page
            return view('instructor.others-settings'); // Adjust the view name accordingly
        }
}
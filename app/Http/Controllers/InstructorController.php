<?php

namespace App\Http\Controllers;
//use function;
use App\Models\Course;
use App\Models\Invoice;
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
        
        $courses = Course::all();

        
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
    // public function forgotPasswordForm()
    // {
    //     // Your controller logic for the 'Forgot Password' menu item
    //     // This might be a simple forgot password form without specific data
    //     // Returning the 'forgot-password.blade.php' view
    //     return view('instructor.forgot-password');
    // }

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

    // public function inbox()
    // {
    //     return view('instructor.inbox');
    // }

    // public function inbox()
    // {
    //     // Retrieve emails from the database
    //     $emails = Email::all(); // This assumes you have an Email model and emails table

    //     // Pass the emails variable to the view
    //     return view('inbox.instructor', ['emails' => $emails]);
    // }
    public function inbox()
    {
        return view('instructor.settings');
    }
    
    // public function compose(Request $request)
    // {
        
    //     Email::create([
    //         'sender' => $request->input('sender'),
    //         'subject' => $request->input('subject'),
            
    //     ]);

    //     return redirect()->route('inbox.instructor');
    // }

    // public function compose(Request $request)
    // {
    //     // Validate the form data if needed
    //     $request->validate([
    //         'sender' => 'required|string|max:255',
    //         'subject' => 'required|string|max:255',
    //         // Add more validation rules as needed
    //     ]);

    //     // Create a new email instance
    //     Email::create([
    //         'sender' => $request->input('sender'),
    //         'subject' => $request->input('subject'),
    //         // Add more fields as needed
    //     ]);

    //     return redirect()->route('inbox.instructor');
    // }

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

    // public function liveClass()
    // {
    //     return view('instructor.live-class');
    // }

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

    // public function edit_invoice($id)
    // {
    //     // Retrieve the invoice with the given ID from the database
    //     $invoice = Invoice::findOrFail($id);

    //     // You can add additional checks, such as verifying that the current user has permission to edit this invoice

    //     // Pass the invoice data to the view
    //     return view('instructor.edit-invoice', ['invoice' => $invoice]);
    // }

    // // ... Other methods in your controller ...

    // // Example of an update method (you can modify this based on your needs)
    // public function update_invoice(Request $request, $id)
    // {
    //     // Validate the form data (customize this based on your requirements)
    //     $request->validate([
    //         'invoice_number' => 'required',
    //         'amount' => 'required|numeric',
    //         // Add more validation rules as needed
    //     ]);

    //     // Find the invoice with the given ID
    //     $invoice = Invoice::findOrFail($id);

    //     // Update the invoice data based on the form input
    //     $invoice->update([
    //         'invoice_number' => $request->input('invoice_number'),
    //         'amount' => $request->input('amount'),
    //         // Update other fields as needed
    //     ]);

    //     // Redirect to a page indicating the update was successful
    //     return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully');
    // }

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
    

}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function adminLogin(){
        return view("Admin.login");
    }

    public function instructorLogin(){
        return view("Instructors.login");
    }

    public function studentLogin(){
        return view("Students.login");
    }

    public function adminCheck(Request $request){

    }

    public function instructorCheck(Request $request){

    }

    public function studentCheck(Request $request){
        $validate = $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:7|max:25',
        ]);
        $validated = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($validated)) {
            $user = Student::where('email', $request->input('email'))->first();
            if ($user->status != 0) {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect()->route('student.login')->withInput()->with('error', 'student Account Is Suspended');
            } else {
                $request->session()->regenerate();

                return redirect()->route('student.dashboard')->with('success', 'student Logged In Successfully');
            }
        } else {
            return back()->withInput()->with('error', 'student Detail Is Incorrect');
        }
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}


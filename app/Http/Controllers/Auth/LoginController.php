<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    }
}

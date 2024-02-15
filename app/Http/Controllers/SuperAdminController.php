<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
        return view('SuperAdmin.auth.login');
    }
    public function check(){

    }
    public function dashboard(){
        return view('SuperAdmin.dashboard');
    }
}

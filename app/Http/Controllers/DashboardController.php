<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('students.dashboard');
    }

    public function myLearning()
    {
        return view('students.my_learning');
    }

    public function myCart()
    {
        return view('students.my_cart');
    }

    public function wishlist()
    {
        return view('students.wishlist');
    }

    public function notifications()
    {
        return view('students.notifications');
    }

    public function messages()
    {
        return view('students.messages');
    }

    public function profile()
    {
        return view('students.profile');
    }

    public function editProfile()
    {
        return view('students.edit_profile');
    }

    public function wallet()
    {
        return view('students.wallet');
    }

    public function analytics()
    {
        return view('students.analytics');
    }

    public function settings()
    {
        return view('students.settings');
    }
}


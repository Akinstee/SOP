<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PagesController extends Controller
{
    // public function index()
    // {
    //     // Fetch data from the model if needed
    //     $data = Page::all(); // Example: fetching all pages

    //     // Pass data to the view
    //     return view('pages.index', ['data' => $data]);
    //     // return view('pages.index');
    // }

    public function index()
    {
        return view('index');
    }
    
    public function showAbout()
{
    return view('Pages.about');
}

public function showCourses()
{
    return view('pages.courses');
}

public function showContact()
{
    return view('pages.contact');
}

public function showTeam()
{
    return view('pages.team');
}

public function showTestimonial()
{
    return view('pages.testimonial');
}

public function showPrivacy()
{
    return view('pages.privacy');
}

public function showTerms()
{
    return view('pages.terms');
}

public function showFaqs()
{
    return view('pages.faqs');
}
}

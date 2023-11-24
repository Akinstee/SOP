<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // Fetch data from the model if needed
        $data = Page::all(); // Example: fetching all pages

        // Pass data to the view
        return view('pages.index', ['data' => $data]);
        // return view('pages.index');
    }
}

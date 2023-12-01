<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->prefix('/admin')->name('admin.')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/check', 'adminCheck')->name('check');
});

//Students Registration and login Route
Route::middleware('guest')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    // Route::get('/register', 'StudentController@showRegistrationForm')->name('register');
    Route::post('/save', 'save')->name('save');
});

Route::middleware('guest')->prefix('/student')->name('student.')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'studentLogin')->name('login');
    Route::post('/check', 'studentCheck')->name('check');
});

//Instructor Registration and Login Route
Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'instructorLogin')->name('login');
    Route::post('/check', 'instructorCheck')->name('check');
});

Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/save', 'save')->name('save');
});

// Homepage Routing
Route::get('/', function () {return view('pages.index');})->name('index');

//Route::get('/index', [PagesController::class, 'index'])->name('pages.index');
Route::get('/about', [PagesController::class, 'showAbout'])->name('about');
Route::get('/courses', [PagesController::class, 'showCourses'])->name('courses');
Route::get('/contact', [PagesController::class, 'showContact'])->name('contact');
Route::get('/team', 'PagesController@showTeam')->name('team');
Route::get('/testimonial', 'PagesController@showTestimonial')->name('testimonial');
Route::get('/404', '404Controller@index')->name('404');
Route::get('/register', 'RegisterController@index')->name('register');
Route::get('/#', '#Controller@index')->name('#');
Route::get('/privacy', 'PageController@showPrivacy')->name('privacy');
Route::get('/terms', 'PageController@showTerms')->name('terms');
Route::get('/faqs', 'PageController@showFaqs')->name('faqs');




//Student Dashboard 
Route::get('/student/dashboard', 'StudentController@dashboard')->name('student.dashboard');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\InstructorController;





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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/index', function () {return view('pages.index');})->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/courses', 'CoursesController@index')->name('courses');
// ... Repeat for other pages ...
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/team', 'TeamController@index')->name('team');
Route::get('/testimonial', 'TestimonialController@index')->name('testimonial');
Route::get('/404', '404Controller@index')->name('404');
Route::get('/register', 'registerController@index')->name('register');
Route::get('/#', '#Controller@index')->name('#');
Route::get('/privacy', 'privacyController@index')->name('privacy');
Route::get('/terms', 'termsController@index')->name('terms');
Route::get('/faqs', 'faqsController@index')->name('faqs');



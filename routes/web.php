<?php

use App\Models\Instructor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('guest')->prefix('/admin')->name('admin.')->controller(LoginController::class)->group(function () {
    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/check', 'adminCheck')->name('check');
});

//Students Registration and login Route
Route::middleware('guest')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
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
Route::get('/#', '#Controller@index')->name('#');
Route::get('/privacy', 'PageController@showPrivacy')->name('privacy');
Route::get('/terms', 'PageController@showTerms')->name('terms');
Route::get('/faqs', 'PageController@showFaqs')->name('faqs');


//Dashboard
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/instructor/dashboard', [InstructorController::class, 'dashboard'])->name('instructor.dashboard');

// Live Class
Route::get('/live-class', [StudentController::class, 'liveClass']);

// My Certificate
Route::get('/my-certificate', [StudentController::class, 'myCertificate']);

// My Courses
Route::get('/my-courses', [StudentController::class, 'myCourses']);

Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/student/my-learning', [StudentController::class, 'myLearning'])->name('student.my_learning');
Route::get('/student/my-cart', [StudentController::class, 'myCart'])->name('student.my_cart');
Route::get('/student/wishlist', [StudentController::class, 'wishlist'])->name('student.wishlist');
Route::get('/student/notifications', [StudentController::class, 'notifications'])->name('student.notifications');
Route::get('/student/messages', [StudentController::class, 'messages'])->name('student.messages');
Route::get('/student/profile', [StudentController::class, 'profile'])->name('student.profile');
Route::get('/student/edit-profile', [StudentController::class, 'editProfile'])->name('student.edit_profile');
Route::get('/student/wallet', [StudentController::class, 'wallet'])->name('student.wallet');
Route::get('/student/analytics', [StudentController::class, 'analytics'])->name('student.analytics');
Route::get('/student/tasks', [StudentController::class, 'tasks'])->name('student.tasks');
Route::get('/student/settings', [StudentController::class, 'settings'])->name('student.settings');
//Route::get('/student/help', [StudentController::class, 'help'])->name('student.help');
Route::get('/student/help', [StudentController::class, 'help'])->name('student.help');
Route::get('/student/logout', [StudentController::class, 'logout'])->name('student.logout');


//Route::get('/student/{student}/profile', [StudentController::class, 'show']);

Route::post('/student/save-settings', [StudentController::class, 'saveSettings'])->name('student.save_settings');

//Route::get('/student/profile/{id}', [StudentProfileController::class, 'showProfile'])->name('student.profile');

//Route::get('/student/{student}/profile/{id?}', [StudentProfileController::class, 'show'])->name('student.profile');

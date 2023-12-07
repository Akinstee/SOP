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


//Dashboard 
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/instructor/dashboard', [InstructorController::class, 'dashboard'])->name('instructor.dashboard');

// Students Profile
Route::get('/profile', [StudentController::class, 'profile']);

//Route::get('/students/profile', [StudentProfileController::class, 'index'])->name('students.profile');


Route::post('/profile/update', [StudentController::class, 'updateProfile']);

// Edit Profile
//Route::get('/edit-profile', [StudentController::class, 'editProfile']);

Route::get('/edit-profile', [StudentController::class, 'editProfile']);
Route::post('/edit-profile/update', [StudentController::class, 'updateProfile']);

// Live Class
Route::get('/live-class', [StudentController::class, 'liveClass']);

// My Certificate
Route::get('/my-certificate', [StudentController::class, 'myCertificate']);

// My Courses
Route::get('/my-courses', [StudentController::class, 'myCourses']);


Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('student.dashboard');

    Route::get('/my-learning', [DashboardController::class, 'myLearning'])->name('student.my_learning');
    Route::get('/my-cart', [DashboardController::class, 'myCart'])->name('student.my_cart');
    Route::get('/wishlist', [DashboardController::class, 'wishlist'])->name('student.wishlist');
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('student.notifications');
    Route::get('/messages', [DashboardController::class, 'messages'])->name('student.messages');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('student.profile');
    Route::get('/edit-profile', [DashboardController::class, 'editProfile'])->name('student.edit_profile');
    Route::get('/wallet', [DashboardController::class, 'wallet'])->name('student.wallet');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('student.analytics');
    Route::get('/tasks', [DashboardController::class, 'tasks'])->name('student.tasks');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('student.settings');
    Route::get('/help', [DashboardController::class, 'help'])->name('student.help');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('student.logout');
});
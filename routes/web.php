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

// Route::middleware('guest')->prefix('/admin')->name('admin.')->controller(LoginController::class)->group(function () {
//     Route::get('/login', 'adminLogin')->name('login');
//     Route::post('/check', 'adminCheck')->name('check');
// });

Route::middleware('guest:admin')->prefix('/admin')->name('admin.')->controller(LoginController::class)->group(function () {
    Route::get('/login', [AdminController::class, 'adminLogin'])->name('login');
    Route::post('/check', [AdminController::class, 'adminCheck'])->name('check');
});

Route::post('/admin/check', 'AdminController@check')->name('admin.check');


//Students Registration and login Route
Route::middleware('guest')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/save', 'save')->name('save');
});

// Route::middleware('guest')->prefix('/student')->name('student.')->controller(LoginController::class)->group(function () {
//     Route::get('/login', 'studentLogin')->name('login');
//     Route::post('/check', 'studentCheck')->name('check');
// });

//Instructor Registration and Login Route
// Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(LoginController::class)->group(function () {
//     Route::get('/login', 'instructorLogin')->name('login');
//     Route::post('/check', 'instructorCheck')->name('check');
// });

Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
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

//Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::get('/student/my-learning', [StudentController::class, 'myLearning'])->name('student.my-learning');
Route::get('/student/my-cart', [StudentController::class, 'myCart'])->name('student.my-cart');
Route::get('/student/wishlist', [StudentController::class, 'wishlist'])->name('student.wishlist');
Route::get('/student/notifications', [StudentController::class, 'notifications'])->name('student.notifications');
Route::get('/student/messages', [StudentController::class, 'messages'])->name('student.messages');
Route::get('/student/edit-profile', [StudentController::class, 'editProfile'])->name('student.edit_profile');
Route::get('/student/wallet', [StudentController::class, 'wallet'])->name('student.wallet');
Route::get('/student/analytics', [StudentController::class, 'analytics'])->name('student.analytics');
Route::get('/student/tasks', [StudentController::class, 'tasks'])->name('student.tasks');
Route::get('/student/settings', [StudentController::class, 'settings'])->name('student.settings');
Route::get('/student/help', [StudentController::class, 'help'])->name('student.help');
Route::get('/student/live-class', [StudentController::class, 'liveClass'])->name('student.live-class');
Route::get('/student/logout', [StudentController::class, 'logout'])->name('student.logout');



Route::post('/student/save-settings', [StudentController::class, 'saveSettings'])->name('student.save_settings');

Route::get('/student/profile', [StudentController::class, 'profile'])->name('student.profile');
Route::post('/student/profile/update', [StudentController::class, 'updateProfile'])->name('profile.update');
Route::post('/student/profile/update-image', [StudentController::class, 'updateProfileImage'])->name('profile.update_image');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('guest')->prefix('/student')->name('student.')->group(function () {
    Route::get('/login', [StudentController::class, 'studentLogin'])->name('login');
    Route::post('/check', [StudentController::class, 'studentCheck'])->name('check');
});

Route::middleware('auth')->prefix('/student')->name('student.dashboard')->group(function () {
    Route::get('student/dashboard', function () {
        return view('dashboard');
    })->name('students.dashboard');
});


//Admin Panel
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
    Route::get('/admin/student-details', [AdminController::class, 'studentDetails'])->name('admin.studentDetails');
    Route::get('/admin/add-student', [AdminController::class, 'addStudent'])->name('admin.addStudent');
    Route::get('/admin/edit-student', [AdminController::class, 'editStudent'])->name('admin.editStudent');

    Route::get('/admin/instructors', [AdminController::class, 'instructors'])->name('admin.instructors');
    Route::get('/admin/instructor-details', [AdminController::class, 'instructorDetails'])->name('admin.instructorDetails');
    Route::get('/admin/add-instructor', [AdminController::class, 'addInstructor'])->name('admin.addInstructor');
    Route::get('/admin/edit-instructor', [AdminController::class, 'editInstructor'])->name('admin.editInstructor');

    Route::get('/admin/courses', [AdminController::class, 'courses'])->name('admin.courses');
    Route::get('/admin/add-course', [AdminController::class, 'addCourse'])->name('admin.addCourse');
    Route::get('/admin/edit-courses', [AdminController::class, 'editCourses'])->name('admin.editCourses');

    Route::get('/admin/invoices', [AdminController::class, 'invoices'])->name('admin.invoices');

    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/live-class', [AdminController::class, 'liveClass'])->name('admin.live-class');

    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

// Route::middleware('auth:instructor')->prefix('/instructor')->name('instructor.')->group(function () {
Route::middleware(['auth:instructor', 'instructor'])->prefix('/instructor')->name('instructor.')->group(function () {
    Route::get('/settings', [InstructorController::class, 'settings'])->name('settings');
    Route::get('/forgot-password', [InstructorController::class, 'forgot-password'])->name('forgot-password');
    Route::get('/error-404', [InstructorController::class, 'error-404'])->name('error-404');
    Route::get('/settings', [InstructorController::class, 'settings'])->name('settings');
    // New routes for courses
    Route::get('/courses', [InstructorController::class, 'courses'])->name('courses');
    Route::get('/add-course', [InstructorController::class, 'addCourse'])->name('add-course');
    Route::get('/edit-course', [InstructorController::class, 'editCourse'])->name('edit-course');
    // New routes for invoices
    Route::get('/invoices', [InstructorController::class, 'invoices'])->name('invoices');
    Route::get('/add-invoice', [InstructorController::class, 'addInvoice'])->name('add-invoice');
    Route::get('/edit-invoice', [InstructorController::class, 'editInvoice'])->name('edit-invoice');
    Route::get('/view-invoice', [InstructorController::class, 'viewInvoice'])->name('view-invoice');
    Route::get('/invoices-settings', [InstructorController::class, 'invoicesSettings'])->name('invoices-settings');
    Route::get('/live-class', [InstructorController::class, 'liveClass'])->name('instructor.live-class');
    Route::get('/logout', [AdminController::class, 'logout'])->name('instructor.logout');
});




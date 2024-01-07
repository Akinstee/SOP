<?php

use App\Models\Instructor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CourseController;
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
    
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/submit', [AdminController::class, 'submit'])->name('admin.submit');


Route::get('/admin/edit', [AdminController::class, 'editProfile'])->name('instructor.edit');
Route::post('/admin/change-password', [AdminController::class, 'changePassword'])->name('instructor.change.password');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
Route::post('/admin/change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');




Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');


Route::get('/admin/courses', [AdminController::class, 'courses'])->name('admin.courses');


Route::get('/admin/invoices', [AdminController::class, 'invoices'])->name('admin.invoices');

Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/live-class', [AdminController::class, 'liveClass'])->name('admin.live-class');
Route::get('/admin/inbox', [AdminController::class, 'inbox'])->name('admin.inbox');

Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/student-details', [AdminController::class, 'student-details'])->name('admin.student-details');
Route::get('/admin/add-student', [AdminController::class, 'add-student'])->name('admin.add-student');
Route::get('/admin/edit-student', [AdminController::class, 'edit-student'])->name('admin.edit-student');
Route::get('/admin/instructor', [AdminController::class, 'instructor'])->name('admin.instructor');
Route::get('/admin/add-student', [AdminController::class, 'add-student'])->name('admin.add-student');


Route::get('/admin/add-course', [AdminController::class, 'addCourse'])->name('admin.add-course');
Route::get('/admin/edit-courses', [AdminController::class, 'editInstructor'])->name('admin.edit-courses');

Route::get('/admin/add-invoice', [AdminController::class, 'AddInvoice'])->name('admin.add-invoice');
Route::get('/admin/edit-invoice', [AdminController::class, 'EditInvoice'])->name('admin.edit-invoice');
Route::get('/admin/view-invoice', [AdminController::class, 'ViewInvoice'])->name('admin.view-invoice');

Route::get('/admin/settings', [AdminController::class, 'Settings'])->name('admin.settings');

Route::get('/admin/error-404', [AdminController::class, 'error-404'])->name('admin.error-404');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');




Route::get('/instructor/courses', [InstructorController::class, 'courses'])->name('instructor.courses');
Route::get('/instructor/edit-courses', [InstructorController::class, 'editCourses'])->name('instructor.edit-course');
Route::get('/instructor/add-course', [InstructorController::class, 'addCourse'])->name('instructor.add-course');
Route::get('/instructor/invoices', [InstructorController::class, 'invoices'])->name('instructor.invoices');
Route::get('/instructor/invoices-paid', [InstructorController::class, 'invoicesPaid'])->name('instructor.invoices-paid');
Route::get('/instructor/add-invoice', [InstructorController::class, 'addInvoice'])->name('instructor.add-invoice');
Route::get('/instructor/edit-invoice', [InstructorController::class, 'editInvoice'])->name('instructor.edit-invoice');
Route::get('/instructor/view-invoice', [InstructorController::class, 'viewInvoice'])->name('instructor.view-invoice');
Route::get('/instructor/store_invoice', [InstructorController::class, 'storeInvoice'])->name('instructor.store_invoice');
Route::get('/instructor/invoice-settings', [InstructorController::class, 'invoicesSettings'])->name('instructor.invoices-settings');
Route::get('/instructor/tax-settings', [InstructorController::class, 'taxSettings'])->name('instructor.tax-settings');
Route::get('/instructor/bank-settings', [InstructorController::class, 'bankSettings'])->name('instructor.bank-settings');
//Route::post('/compose', [InstructorController::class, 'compose'])->name('inbox.instructor.compose');

Route::post('/inbox/instructor/compose', [InstructorController::class, 'compose'])->name('instructor.compose');

Route::get('/instructor/settings', [InstructorController::class, 'settings'])->name('instructor.settings');
Route::get('/instructor/forgot-password', [InstructorController::class, 'forgotPassword'])->name('instructor.forgot-password');
Route::get('/instructor/error-404', [InstructorController::class, 'error404'])->name('instructor.error-404');

Route::get('/instructor/profile', [InstructorController::class, 'showProfile'])->name('instructor.profile');
Route::get('/instructor/edit', [InstructorController::class, 'editProfile'])->name('instructor.edit');
Route::post('/instructor/change-password', [InstructorController::class, 'changePassword'])->name('instructor.change.password');

Route::get('/instructor/inbox', [InstructorController::class, 'inbox'])->name('instructor.inbox');





Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/instructor', [AdminController::class, 'instructorList'])->name('instructor');
    Route::get('/instructor-details', [AdminController::class, 'instructorDetails'])->name('instructor-details');
    Route::get('/add-instructor', [AdminController::class, 'addInstructor'])->name('add-instructor');
    Route::get('/edit-instructor', [AdminController::class, 'editInstructor'])->name('edit-instructor');
    // ... other routes

    Route::get('/student-details', [AdminController::class, 'studentDetails'])->name('student-details');
    Route::get('/add-student', [AdminController::class, 'addStudent'])->name('add-student');
    Route::get('/edit-student', [AdminController::class, 'editStudent'])->name('edit-student');

    Route::post('/store-course', [AdminController::class, 'storeCourse'])->name('store_course');

    Route::get('/forgot-password', [AdminController::class, 'forgotPassword'])->name('forgot-password');

    Route::get('/tax-settings', [AdminController::class, 'taxSettings'])->name('tax-settings');
    Route::get('/bank-settings', [AdminController::class, 'bankSettings'])->name('bank-settings');

    Route::get('/invoices-settings', [AdminController::class, 'invoicesSettings'])->name('invoices-settings');
    
    Route::get('/localization-details', [AdminController::class, 'localizatioDetails'])->name('localization-details');

    Route::get('/payment-settings', [AdminController::class, 'paymentSettings'])->name('payment-settings');
    
    Route::get('/email-settings', [AdminController::class, 'emailSettings'])->name('email-settings');

    Route::get('/social-settings', [AdminController::class, 'socialSettings'])->name('social-settings');

    Route::get('/social-links', [AdminController::class, 'socialLinks'])->name('social-links');

    Route::get('/seo-settings', [AdminController::class, 'seoSettings'])->name('seo-settings');

    Route::get('/others-settings', [AdminController::class, 'othersSettings'])->name('others-settings');


});
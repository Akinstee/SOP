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

//Students Registration and login Route
Route::middleware('guest:student')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/save', 'save')->name('save');
    Route::get('/login', 'studentLogin')->name('login');
    Route::post('/check', 'studentCheck')->name('check');
});
Route::middleware('auth:student')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/student/dashboard', 'dashboard')->name('dashboard');
    // Live Class
    Route::get('/live-class',  'liveClass');
    // My Certificate
    Route::get('/my-certificate',  'myCertificate');
    // My Courses
    Route::get('/my-courses',  'myCourses');
    Route::get('/student/my-learning',  'myLearning')->name('my-learning');
    Route::get('/student/my-cart',  'myCart')->name('my-cart');
    Route::get('/student/wishlist',  'wishlist')->name('wishlist');
    Route::get('/student/notifications',  'notifications')->name('notifications');
    Route::get('/student/messages',  'messages')->name('messages');
    Route::get('/student/edit-profile',  'editProfile')->name('edit_profile');
    Route::get('/student/wallet',  'wallet')->name('wallet');
    Route::get('/student/analytics',  'analytics')->name('analytics');
    Route::get('/student/tasks',  'tasks')->name('tasks');
    Route::get('/student/settings',  'settings')->name('settings');
    Route::get('/student/help',  'help')->name('help');
    Route::get('/student/live-class',  'liveClass')->name('live-class');
    Route::get('/student/logout',  'logout')->name('logout');
    Route::post('/student/save-settings',  'saveSettings')->name('save_settings');
    Route::get('/student/profile',  'profile')->name('profile');
    Route::post('/student/profile/update',  'updateProfile')->name('profile.update');
    Route::post('/student/profile/update-image',  'updateProfileImage')->name('profile.update_image');
    Route::get('/student/inbox',  'inbox')->name('inbox');
    Route::get('/student/courses',  'courses')->name('courses');
    Route::get('/student/edit-course',  'editCourse')->name('edit-course');
    Route::get('/student/forgot-password',  'forgotPassword')->name('forgot-password');
    Route::get('/student/modules',  'modules')->name('modules');
    Route::get('/student/intro-module',  'introModule')->name('introModule');
    Route::post('/student/submit-quiz',  'submitQuiz')->name('submitQuiz');
    Route::post('/student/send-message',  'sendMessage')->name('sendMessage');
});
Route::middleware('guest:instructor')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/save', 'save')->name('save');
    Route::get('/login', 'instructorLogin')->name('login');
    Route::post('/check', 'instructorCheck')->name('check');
});
Route::middleware('auth:instuctor')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/instuctor/dashboard', 'dashboard')->name('dashboard');
    Route::get('/instructor/courses', 'courses')->name('courses');
    Route::get('/instructor/edit-courses', 'editCourses')->name('edit-course');
    Route::get('/instructor/add-course', 'addCourse')->name('add-course');
    Route::get('/instructor/invoices', 'invoices')->name('invoices');
    Route::get('/instructor/invoices-paid', 'invoicesPaid')->name('invoices-paid');
    Route::get('/instructor/add-invoice', 'addInvoice')->name('add-invoice');
    Route::get('/instructor/edit-invoice', 'editInvoice')->name('edit-invoice');
    Route::get('/instructor/view-invoice', 'viewInvoice')->name('view-invoice');
    Route::get('/instructor/store_invoice', 'storeInvoice')->name('store_invoice');
    Route::get('/instructor/invoice-settings', 'invoicesSettings')->name('invoices-settings');
    Route::get('/instructor/tax-settings', 'taxSettings')->name('tax-settings');
    Route::get('/instructor/bank-settings', 'bankSettings')->name('bank-settings');
    Route::get('/instructor/settings', 'settings')->name('settings');
    Route::get('/instructor/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::get('/instructor/error-404', 'error404')->name('error-404');
    Route::get('/instructor/profile', 'showProfile')->name('profile');
    Route::get('/instructor/edit', 'editProfile')->name('edit');
    Route::post('/instructor/change-password', 'changePassword')->name('change.password');
    Route::get('/instructor/inbox', 'inbox')->name('inbox');
    Route::get('/localization-details', 'localizatioDetails')->name('localization-details');
    Route::get('/instructor/payment-settings', 'paymentSettings')->name('payment-settings');
    Route::get('/instructor/email-settings', 'emailSettings')->name('email-settings');
    Route::get('/instructor/social-settings', 'socialSettings')->name('social-settings');
    Route::get('/instructor/social-links', 'socialLinks')->name('social-links');
    Route::get('/instructor/seo-settings', 'seoSettings')->name('seo-settings');
    Route::get('/instructor/others-settings', 'othersSettings')->name('others-settings');
});
Route::middleware('guest:admin')->prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function () {
    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/check', 'adminCheck')->name('check');
});
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function () {
    //Dashboard
    Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
    Route::get('/admin/dashboard', 'dashboard')->name('admin.dashboard');
    Route::post('/admin/submit', 'submit')->name('admin.submit');
    Route::get('/admin/edit', 'editProfile')->name('instructor.edit');
    Route::post('/admin/change-password', 'changePassword')->name('instructor.change.password');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::post('/admin/change-password', 'changePassword')->name('admin.change.password');
    Route::get('/admin/edit', 'edit')->name('admin.edit');
    Route::get('/admin/students', 'students')->name('admin.students');
    Route::get('/admin/courses', 'courses')->name('admin.courses');
    Route::get('/admin/invoices', 'invoices')->name('admin.invoices');
    Route::get('/admin/settings', 'settings')->name('admin.settings');
    Route::get('/admin/live-class', 'liveClass')->name('admin.live-class');
    Route::get('/admin/inbox', 'inbox')->name('admin.inbox');
    Route::get('/admin/students', 'students')->name('admin.students');
    Route::get('/admin/student-details', 'student-details')->name('admin.student-details');
    Route::get('/admin/add-student', 'add-student')->name('admin.add-student');
    Route::get('/admin/edit-student', 'edit-student')->name('admin.edit-student');
    Route::get('/admin/instructor', 'instructor')->name('admin.instructor');
    Route::get('/admin/add-student', 'add-student')->name('admin.add-student');
    Route::get('/admin/add-course', 'addCourse')->name('admin.add-course');
    Route::get('/admin/edit-courses', 'editInstructor')->name('admin.edit-courses');
    Route::get('/admin/add-invoice', 'AddInvoice')->name('admin.add-invoice');
    Route::get('/admin/edit-invoice', 'EditInvoice')->name('admin.edit-invoice');
    Route::get('/admin/view-invoice', 'ViewInvoice')->name('admin.view-invoice');
    Route::get('/admin/settings', 'Settings')->name('admin.settings');
    Route::get('/admin/error-404', 'error-44')->name('admin.error-404');
    Route::get('/admin/logout', 'logout')->name('admin.logout');
    Route::get('/instructor', 'instructorList')->name('instructor');
    Route::get('/instructor-details', 'instructorDetails')->name('instructor-details');
    Route::get('/add-instructor', 'addInstructor')->name('add-instructor');
    Route::get('/edit-instructor', 'editInstructor')->name('edit-instructor');
    // ... other routes
    Route::get('/student-details', 'studentDetails')->name('student-details');
    Route::get('/add-student', 'addStudent')->name('add-student');
    Route::get('/edit-student', 'editStudent')->name('edit-student');
    Route::post('/store-course', 'storeCourse')->name('store_course');
    Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::get('/tax-settings', 'taxSettings')->name('tax-settings');
    Route::get('/bank-settings', 'bankSettings')->name('bank-settings');
    Route::post('/store-invoice', 'storeInvoice')->name('store_invoice');
    Route::get('/invoices-settings', 'invoicesSettings')->name('invoices-settings');
    Route::get('/localization-details', 'localizatioDetails')->name('localization-details');
    Route::get('/payment-settings', 'paymentSettings')->name('payment-settings');
    Route::get('/email-settings', 'emailSettings')->name('email-settings');
    Route::get('/social-settings', 'socialSettings')->name('social-settings');
    Route::get('/social-links', 'socialLinks')->name('social-links');
    Route::get('/seo-settings', 'seoSettings')->name('seo-settings');
    Route::get('/others-settings', 'othersSettings')->name('others-settings');
});

// Homepage Routing
Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::controller(PagesController::class)->group(function () {
    Route::get('/about', 'showAbout')->name('about');
    Route::get('/courses', 'showCourses')->name('courses');
    Route::get('/contact', 'showContact')->name('contact');
    Route::get('/team', 'showTeam')->name('team');
    Route::get('/testimonial', 'showTestimonial')->name('testimonial');
    Route::get('/privacy', 'showPrivacy')->name('privacy');
    Route::get('/terms', 'showTerms')->name('terms');
    Route::get('/faqs', 'howFaqs')->name('faqs');
});

Route::prefix('courses')->controller(CourseController::class)->group(function () {
    Route::get('/courses', 'index')->name('courses');
    // Route::get('/courses', 'index');
    Route::get('/courses/intro', 'intro');
    Route::get('/courses/intro/video', 'introVideo');
    Route::get('/courses/css', 'css')->name('courses.css');
    Route::get('/courses/javascript', 'javascript')->name('courses.javascript');
    Route::get('/courses/modules', 'showModulesScreen')->name('courses.modules');
});

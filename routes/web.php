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
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    // Live Class
    Route::get('/live-class',  'liveClass');
    // My Certificate
    Route::get('/my-certificate',  'myCertificate');
    // My Courses
    Route::get('/my-courses',  'myCourses');
    Route::get('/my-learning',  'myLearning')->name('my-learning');
    Route::get('/my-cart',  'myCart')->name('my-cart');
    //Route::get('/wishlist',  'wishlist')->name('wishlist');
    Route::get('/notifications',  'notifications')->name('notifications');
    Route::get('/messages',  'messages')->name('messages');
    Route::get('/edit-profile',  'editProfile')->name('edit_profile');
    Route::get('/wallet',  'wallet')->name('wallet');
    Route::get('/analytics',  'analytics')->name('analytics');
    Route::get('/tasks',  'tasks')->name('tasks');
    Route::get('/settings',  'settings')->name('settings');
    Route::get('/help',  'help')->name('help');
    Route::get('/live-class',  'liveClass')->name('live-class');
    Route::get('/logout',  'logout')->name('logout');
    Route::post('/save-settings',  'saveSettings')->name('save_settings');
    Route::get('/profile',  'profile')->name('profile');
    Route::post('/profile/update',  'updateProfile')->name('profile.update');
    Route::post('/profile/update-image',  'updateProfileImage')->name('profile.update_image');
    Route::get('/inbox',  'inbox')->name('inbox');
    Route::get('/courses',  'courses')->name('courses');
    Route::get('/edit-course',  'editCourse')->name('edit-course');
    Route::get('/forgot-password',  'forgotPassword')->name('forgot-password');
    //Route::get('/modules',  'modules')->name('modules');
    //Route::get('/intro-module', 'introModule')->name('introModule');
    //Route::post('/submit-quiz',  'submitQuiz')->name('submitQuiz');
    //Route::post('/send-message',  'sendMessage')->name('sendMessage');
});
Route::middleware('guest:instructor')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/save', 'save')->name('save');
    Route::get('/login', 'instructorLogin')->name('login');
    Route::post('/check', 'instructorCheck')->name('check');
});

Route::middleware('auth:instructor')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/edit-courses', 'editCourses')->name('edit-course');
    Route::get('/add-course', 'addCourse')->name('add-course');
    Route::post('/addstore', 'storeCourse')->name('add-store');
    Route::get('/invoices', 'invoices')->name('invoices');
    Route::get('/invoices-paid', 'invoicesPaid')->name('invoices-paid');
    Route::get('/add-invoice', 'addInvoice')->name('add-invoice');
    Route::get('/edit-invoice', 'editInvoice')->name('edit-invoice');
    Route::get('/view-invoice', 'viewInvoice')->name('view-invoice');
    Route::get('/store_invoice', 'storeInvoice')->name('store_invoice');
    Route::get('/invoice-settings', 'invoicesSettings')->name('invoices-settings');
    Route::get('/tax-settings', 'taxSettings')->name('tax-settings');
    Route::get('/bank-settings', 'bankSettings')->name('bank-settings');
    Route::get('/settings', 'settings')->name('settings');
    Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::get('/error-404', 'error404')->name('error-404');
    Route::get('/profile', 'showProfile')->name('profile');
    Route::get('/profile-edit', 'editProfile')->name('edit');
    Route::post('/change-password', 'changePassword')->name('change.password');
    Route::get('/inbox', 'inbox')->name('inbox');
    Route::get('/localization-details', 'localizatioDetails')->name('localization-details');
    Route::get('/payment-settings', 'paymentSettings')->name('payment-settings');
    Route::get('/email-settings', 'emailSettings')->name('email-settings');
    Route::get('/social-settings', 'socialSettings')->name('social-settings');
    Route::get('/social-links', 'socialLinks')->name('social-links');
    Route::get('/seo-settings', 'seoSettings')->name('seo-settings');
    Route::get('/others-settings', 'othersSettings')->name('others-settings');
});
Route::middleware('guest:admin')->prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function () {
    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/check', 'adminCheck')->name('check');
});
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function () {
    //Dashboard
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
    Route::post('/submit', 'submit')->name('admin.submit');
    Route::get('/edit', 'editProfile')->name('instructor.edit');
    Route::post('/change-password', 'changePassword')->name('instructor.change.password');
    Route::get('/profile', 'profile')->name('admin.profile');
    Route::post('/change-password', 'changePassword')->name('admin.change.password');
    Route::get('/edit', 'edit')->name('admin.edit');
    Route::get('/students', 'students')->name('admin.students');
    Route::get('/courses', 'courses')->name('admin.courses');
    Route::get('/invoices', 'invoices')->name('admin.invoices');
    Route::get('/settings', 'settings')->name('admin.settings');
    Route::get('/live-class', 'liveClass')->name('admin.live-class');
    Route::get('/inbox', 'inbox')->name('admin.inbox');
    Route::get('/students', 'students')->name('admin.students');
    Route::get('/student-details', 'student-details')->name('admin.student-details');
    Route::get('/add-student', 'add-student')->name('admin.add-student');
    Route::get('/edit-student', 'edit-student')->name('admin.edit-student');
    Route::get('/instructor', 'instructor')->name('admin.instructor');
    Route::get('/add-student', 'add-student')->name('admin.add-student');
    Route::get('/add-course', 'addCourse')->name('admin.add-course');
    Route::get('/edit-courses', 'editInstructor')->name('admin.edit-courses');
    Route::get('/add-invoice', 'AddInvoice')->name('admin.add-invoice');
    Route::get('/edit-invoice', 'EditInvoice')->name('admin.edit-invoice');
    Route::get('/view-invoice', 'ViewInvoice')->name('admin.view-invoice');
    Route::get('/settings', 'Settings')->name('admin.settings');
    Route::get('/error-404', 'error-44')->name('admin.error-404');
    Route::get('/logout', 'logout')->name('admin.logout');
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
    Route::post('/store', 'store');
    Route::get('/courses/intro/video', 'introVideo');
    Route::get('/courses/css', 'css')->name('courses.css');
    Route::get('/courses/javascript', 'javascript')->name('courses.javascript');
    Route::get('/courses/modules', 'showModulesScreen')->name('courses.modules');
});


// Route for displaying the form to edit a course
Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// Route for updating a course after editing
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');

// Route for deleting a course
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

//Route for viewing Course detail
Route::get('/courses/{id}/view', [CourseController::class, 'view'])->name('courses.view');

// routes/web.php

Route::middleware('auth')->group(function () {
    Route::get('/buy-courses', 'StudentController@showBuy::class, Courses')->name('buy.courses');
    Route::post('/checkout', 'StudentController@checkout')->name('checkout');
    Route::post('/payment', 'PaymentController@payWithPayPal')->name('paypal.payment');
});

Route::post('/student/submit-quiz', [StudentController::class, 'submitQuiz'])->name('submitQuiz');
Route::post('/student/send-message', [StudentController::class, 'sendMessage'])->name('sendMessage');
Route::get('/student/modules', [StudentController::class, 'modules'])->name('students.modules');
Route::get('/student/introModule', [StudentController::class, 'introModule'])->name('students.introModule');

Route::get('/student/fundamental-module', [StudentController::class, 'showFundamentalModule'])->name('student.fundamental-module');
Route::get('/tasks/submit', [StudentController::class, 'submitTask'])->name('tasks.submit');
Route::post('/tasks/store', [StudentController::class, 'storeTaskResponse'])->name('tasks.store');

Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.detail');

Route::prefix('student')->group(function () {
    Route::get('/wishlist', [StudentController::class, 'showWishlist'])->name('student.wishlist');
    Route::post('/wishlist/add', [StudentController::class, 'addToWishlist'])->name('student.wishlist.add');
});
<?php

use Illuminate\Support\Facades\Route;
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

//Admin Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

//Admin Dashboard Route
Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/manage/users', 'AdminController@manageUsers')->name('admin.manage.users');
    Route::delete('/admin/delete/user/{id}', 'AdminController@deleteUser')->name('admin.delete.user');
    Route::post('/admin/promote/user/{id}', 'AdminController@promoteUser')->name('admin.promote.user');
    Route::post('/admin/demote/user/{id}', 'AdminController@demoteUser')->name('admin.demote.user');
    // Add more routes as needed
});


});
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    // Add more routes as needed
});

//Students Registration and login Route
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Instructor Registration and Login Route
Route::get('/instructor/register', [InstructorController::class, 'showRegistrationForm'])->name('instructor.register');
Route::post('/instructor/register', [InstructorController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
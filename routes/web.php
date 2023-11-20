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

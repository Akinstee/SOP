<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< Updated upstream
=======
Route::middleware('guest')->prefix('/admin')->name('admin.')->controller(LoginController::class)->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/check', [LoginController::class, 'check'])->name('check');
});

Route::middleware('guest')->prefix('/user')->name('user.')->controller(LoginController::class)->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/check', [LoginController::class, 'check'])->name('check');
});

//Students Registration and login Route
Route::middleware('guest')->prefix('/student')->name('student.')->controller(StudentController::class)->group(function () {
    Route::get('/create', [StudentController::class, 'index'])->name('create');
    Route::post('/save', [StudentController::class, 'save'])->name('save');
});

//Instructor Registration and Login Route
Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(LoginController::class)->group(function () {
    Route::get('/register', [InstructorController::class, 'showRegistrationForm'])->name('instructor.register');
    Route::post('/', [InstructorController::class, 'register']);
});

Route::middleware('guest')->prefix('/instructor')->name('instructor.')->controller(InstructorController::class)->group(function () {
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/save', [StudentController::class, 'save'])->name('save');
});



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
>>>>>>> Stashed changes

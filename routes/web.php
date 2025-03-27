<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main_controller;

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

Route::get('/', [main_controller::class,'main']);


Route::get('/menu', function () {
    return view('main.menu');
});

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/course', function () {
    return view('main.course'); 
});

Route::get('/contact', function () {
    return view('main.contact');
});

Route::get('/instructor', function () {
    return view('main.instructor');
});


Route::get('/signin', function () {
    return view('authentication.signin');
});

Route::get('/signup', function () {
    return view('authentication.signup');
});

Route::controller(main_controller::class)->group(function(){
    Route::post('/instructor','instructor');
    Route::post('/signup','register');
});

// for admin page

Route::view('/courseUpload','admin.upload');

Route::controller(main_controller::class)->group(function(){
    Route::get('/admin','admin');
    Route::get('/showStudent','showStudent');
    Route::get('/showInstructor','showInstructor');
    Route::get('/showCourse','showCourse');
    Route::post('/courseUpload','courseUpload');

    // delete instructor
    Route::get('/deleteStudent/{sid}','deleteStudent');
    Route::get('/deleteInstructor/{sid}','deleteInstructor');
    
    Route::get('/updateStudent/{sid}','updateStudent');
    Route::post('/updateStudent/{sid}','sendStudentDetail');
    
    Route::get('updateInstructor/{sid}' , 'updateInstructor');
    Route::post('updateInstructor/{sid}' , 'sendInstructorDetail');

});;












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

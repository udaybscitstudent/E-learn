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
    Route::get('/admin','admin')->name('admin');
    Route::get('/showStudent','showStudent')->name('SStudent');
    Route::get('/showInstructor','showInstructor')->name('SInstructor');
    Route::get('/showCourse','showCourse')->name('SCourse');
    Route::post('/courseUpload','courseUpload')->name('CUpload');

    // delete instructor
    Route::get('/deleteStudent/{sid}','deleteStudent')->name('DStudent');
    Route::get('/deleteInstructor/{sid}','deleteInstructor')->name('DInstructor');
    
    Route::get('/updateStudent/{sid}','updateStudent')->name('UStudent');
    Route::post('/updateStudent/{sid}','sendStudentDetail')->name('SSDetail');
    
    Route::get('updateInstructor/{sid}' , 'updateInstructor')->name('UInstructor');
    Route::post('updateInstructor/{sid}' , 'sendInstructorDetail')->name('SIInstructor');

});












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

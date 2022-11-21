<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('registration');
});


Route::get('/about1111', function(){
   return view( 'about');
})->name('about');

Route::get('/contact', function(){
   return 'contact';
});

Route::get('/country',function(){
    return view('country');
})->middleware('country');


Route::get('contact', [ExampleController::class, 'index'])->name('contact');

//Route::get('student/store', [ExampleController::class, 'Studentstore'])->name('student.store');

Route::get('/test',SingleController::class);



// Route::post('/student/store', ExampleController::class , 'Studentstore')->name('student.store');

Route::resource("/student", StudentController::class);

Route::resource('image', ImageController::class);


// Route::controller(SampleController::class)->group(function(){

//     Route::get('login', 'index')->name('login');

//     Route::get('registration', 'registration')->name('registration');

//     Route::get('logout', 'logout')->name('logout');

//     Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

//     Route::post('validate_login', 'validate_login')->name('sample.validate_login');

//     Route::get('dashboard', 'dashboard')->name('dashboard');

// });







<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
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







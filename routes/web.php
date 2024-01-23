<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;

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

// Route::get('login', function () {
//     return view('login');
// });

// Route::post('logged', function () {
//     return 'You are logged in';
// })->name('logged');

// Route::get('test20',[ExampleController::class,'createSession']);
// Route::get('getSession',[Controller::class,'getSession']);
// Route::post('imageUpload',[ExampleController::class,'upload'])->name('imageUpload');
Route::get('test', function(){
    return view('testHome');
})->name('testHome');

Route::get('404', function(){
    return view('404');
})->name('404');

Route::get('contact', function(){
    return view('contact');
})->name('contact');
// Route::get('image', function(){
//     return view('image');
// });

// Routes for the car table
// 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// oute::get('home', function(){
//     return view('home');
// });R
// task12
Route::get('contant',[ExampleController::class,'contant'])->name('contant');
Route::post('contactMail',[ExampleController::class,'contactMail'])->name('contactMail');



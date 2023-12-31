<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('register', function () {
//    return view('register');
// });

Route::get('home', function () {
   return view('home');
});

Route::get('smartphone', function () {
    return view('smartphone');
 });

//  Route::get('laptop', function () {
//     return view('laptop');
//  });

 Route::get('compare', function () {
    return view('compare');
 });

 Route::get('/user', function () {
    return view('user');
 });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/laptop', [App\Http\Controllers\HomeController::class, 'index'])->name('laptop');

Route::post('/videos', 'VideoController@store')->name('videos.store');

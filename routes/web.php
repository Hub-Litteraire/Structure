<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Users Roots
Route::get('/', function () {
    return view('Gallery');
})->name('home');

Route::get('/Gallery', function () {
    return view('Gallery');
})->name('Gallery');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');

Route::get('/My_Profile', function () {
    return view('My_Profile');
})->name('My_Profile');

Route::get('/My_Groupes', function () {
    return view('My_Groupes');
})->name('My_Groupes');

// Admin Roots
Route::get('/Admin', function () {
    return view('Dashboard');
})->name('Dashboard');

Route::get('/Users', function () {
    return view('Users');
})->name('Users');

Route::get('/Books', function () {
    return view('Books');
})->name('Books');

Route::get('/Groupes', function () {
    return view('Groupes');
})->name('Groupes');

Route::get('/Comments', function () {
    return view('Comments');
})->name('Comments');

Route::get('/Likes', function () {
    return view('Likes');
})->name('Likes');

Route::get('/Starts', function () {
    return view('Starts');
})->name('Starts');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
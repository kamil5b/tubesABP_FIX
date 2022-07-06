<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;


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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});


// Route::get('/login', [LoginController::class, 'index']);
// Route::post('/post-login', [LoginController::class, 'login']);
// Route::get('welcome',[LoginController::class, 'home']);
Route::get('holiday', [PaketController::class, 'index']);



// CONTOHHHH!!!!
Route::get('/reg', function () {
    return view('login.regist', [
        "title" => "Registration"
    ]);
});

Route::get('/price', function () {
    return view('package.price', [
        "title" => "Packages"
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;


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

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin"
    ]);
});

Route::get('/admin/destination', function () {
    return view('admin.destination', [
        "title" => "destination"
    ]);
});

Route::get('/admin/destination/add', function () {
    return view('admin.destination.add', [
        "title" => "destination-add"
    ]);
});

Route::get('/admin/package', function () {
    return view('admin.package', [
        "title" => "destination-add"
    ]);
});

Route::get('/admin/package/add', function () {
    return view('admin.package.add', [
        "title" => "package-add"
    ]);
});

Route::get('/admin/package/delete', function () {
    return view('admin.package.delete', [
        "title" => "package-delete"
    ]);
});

Route::get('/admin/destination/delete', function () {
    return view('admin.destination.delete', [
        "title" => "package-delete"
    ]);
});






// CONTOHHHH!!!!





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
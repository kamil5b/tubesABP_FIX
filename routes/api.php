<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', 'App\Http\Controllers\LoginController@loginAPI');
Route::post('/register', 'App\Http\Controllers\LoginController@register');
Route::get('/logout', 'App\Http\Controllers\LoginController@logoutAPI')->middleware('auth:api');
Route::get('/paket/get',function () {
    return PaketController::getAll();
});
Route::get('/bookings/{user_id}',function ($user_id) {
    return PaketController::getAll($user_id);
});
Route::post('/bookings/add',function (Request $request) {
    return PaketController::store($request);
});
Route::get('/bookings/delete/{$id}',function ($id) {
    return PaketController::hapus($id);
});
Route::post('/bookings/get',function (Request $request) {
    return PaketController::update($request);
});
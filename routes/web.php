<?php

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

Route::view('/', 'index');
Route::get('/user-dashboard', [App\Http\Controllers\UserController::class, 'dashboard']);
Route::patch('/update-profile', [App\Http\Controllers\UserController::class, 'update']);
Route::view('/coupon-submit', 'coupon-submit');

Route::get('/delete-coupon/{id}/{cid}', [App\Http\Controllers\WebCodeController::class, 'delete']);

Route::post('/create-coupon', [App\Http\Controllers\WebCodeController::class, 'createCoupon']);
Route::post('/create-multiple-coupon', [App\Http\Controllers\WebCodeController::class, 'createMCoupon']);

// Route::view('reset-password', 'auth.reset-password')->name('password.reset');

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return Redirect::to('/');
});


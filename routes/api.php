<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Auth API's
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/forgot-password', [App\Http\Controllers\AuthController::class, 'forgot']);
Route::post('/password/reset', [App\Http\Controllers\AuthController::class, 'reset']);
Route::post('/update-password', [App\Http\Controllers\AuthController::class, 'update'])->middleware('auth:sanctum');

//Creator API'S
Route::get('/q/{url}', [App\Http\Controllers\CreatorController::class, 'search']);
Route::get('/s/{url}', [App\Http\Controllers\CreatorController::class, 'searchName']);
Route::post('/support', [App\Http\Controllers\CreatorController::class, 'support']);
Route::get('/supporters', [App\Http\Controllers\CreatorController::class, 'supporters'])->middleware('auth:sanctum');




// Route::get('/index', [App\Http\Controllers\WebCodeController::class, 'index']);
// Route::post('/create', [App\Http\Controllers\WebCodeController::class, 'create']);
// Route::patch('/update-image', [App\Http\Controllers\WebCodeController::class, 'update']);




// Route::group(['middleware' => 'verified','auth'], function () {
//     Route::get('/checkout', [App\Http\Controllers\ProductsController::class, 'checkout']);
//     Route::post('/checkout/success', [App\Http\Controllers\ProductsController::class, 'checkout_success']);    
//     });
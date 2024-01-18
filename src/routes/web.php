<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\DateController;


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

Route::middleware('auth')->group(function () {
    Route::get('/', [StampController::class, 'index']);
});
Route::post('/attend', [StampController::class, 'attend']);
Route::post('/leave', [StampController::class, 'leave']);
Route::post('/breakbegin', [StampController::class, 'breakbegin']);
Route::post('/breakend', [StampController::class, 'breakend']);

Route::middleware('auth')->group(function () {
    Route::get('/date', [DateController::class, 'index']);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\RestController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

// Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
//   return $request->user();
// });

Route::get('/email/verify', function () {
  return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/logout', [AuthController::class, 'getLogout']);



Route::middleware('verified')->group(function () {

  Route::get('/', [AttendController::class, 'getIndex']);

  Route::get('/attend/start', [AttendController::class, 'startAttend']);
  Route::get('/attend/end', [AttendController::class, 'endAttend']);

  Route::get('/rest/start', [RestController::class, 'startRest']);
  Route::get('/rest/end', [RestController::class, 'endRest']);

  Route::get('/attend/{num}', [AttendController::class, 'getAttend']);

  Route::get('/userlist', [AttendController::class, 'userList']);
  Route::get('/userlist/{num}', [AttendController::class, 'userAttend']);
});

Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');;
Route::post('/login', [AuthController::class, 'postLogin']);



<?php

use App\Http\Controllers\UserAuthentication\UserController;
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

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/forgotpassword', [UserController::class, 'forgotpassword'])->name('user.forgotpassword');


Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::post('/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
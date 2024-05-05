<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPages\UserController;
use App\Http\Controllers\UserPages\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/exchange', [DashboardController::class, 'exchange'])->name('user.exchange');
Route::get('/exchangeconnectors', [DashboardController::class, 'connectors'])->name('user.connectors');


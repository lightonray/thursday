<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPages\UserController;
use App\Http\Controllers\UserPages\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\TradingBots\TradingBotController;
use App\Http\Controllers\ExchangeConnectors\ExchangeConnectorController;

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
Route::get('/bots', [DashboardController::class, 'bot'])->name('user.bots');
Route::get('/strategymarket', [DashboardController::class, 'strategyMarket'])->name('user.strategymarket');
Route::get('/mystrategies', [DashboardController::class, 'userStrategies'])->name('user.strategies');

Route::get('/profile{bot}', [TradingBotController::class, 'showBotProfile'])->name('bot.profile');


Route::post('/exchangeconnector/store', [ExchangeConnectorController::class, 'store']);
Route::post('/bot/store', [TradingBotController::class, 'storeBot']);
Route::post('/add-strategy', [UserController::class, 'addStrategy'])->name('user.add_strategy');




Route::post('/bot/start', [TradingBotController::class, 'startBot']);
Route::post('/bot/stop', [TradingBotController::class, 'stopBot']);
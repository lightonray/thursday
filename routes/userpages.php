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
// Dashboard Routes
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

// Exchange Routes
Route::get('/exchange', [DashboardController::class, 'exchange'])->name('user.exchange');
Route::get('/exchangeconnectors', [DashboardController::class, 'connectors'])->name('user.connectors');

// Bot Routes
Route::get('/bots', [DashboardController::class, 'bot'])->name('user.bots');
Route::get('/profile{bot}', [TradingBotController::class, 'showBotProfile'])->name('bot.profile');
Route::post('/bot/store', [TradingBotController::class, 'storeBot']);

// Strategy Routes
Route::get('/profile{strategy}', [DashboardController::class, 'showStrategyProfile'])->name('strategy.profile');
Route::get('/strategymarket', [DashboardController::class, 'strategyMarket'])->name('user.strategymarket');
Route::get('/mystrategies', [DashboardController::class, 'userStrategies'])->name('user.strategies');
Route::post('/add-strategy', [UserController::class, 'addStrategy'])->name('user.add_strategy');
Route::post('/userstrategy/delete/{id}', [UserController::class, 'removeStrategy'])->name('user.remove_strategy');

// User Profile Routes
Route::get('/userprofile', [UserController::class, 'viewProfile'])->name('user.profile');

 // Exchange Connector Routes
Route::post('/exchangeconnector/store', [ExchangeConnectorController::class, 'store']);
Route::post('/exchange-connector/delete/{id}', [ExchangeConnectorController::class, 'delete'])->name('connector.delete');

// Account Summary Route
Route::get('/account-summary', [UserController::class, 'fetchAccountSummary'])->name('account.summary');

// Bot Control Routes
Route::post('/bot/start', [TradingBotController::class, 'startBot']);
Route::post('/bot/stop', [TradingBotController::class, 'stopBot']);
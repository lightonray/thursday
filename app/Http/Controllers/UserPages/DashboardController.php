<?php

namespace App\Http\Controllers\UserPages;

use App\Models\Bot;
use App\Models\Strategy;
use Illuminate\Http\Request;
use App\Models\TradingSymbol;
use App\Models\ExchangeConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    
    public function exchange()
    {
        return view('userpages.exchange');
    }

    public function connectors()
    {
        $connectors = ExchangeConnector::where('user_id', Auth::id())->get();
        return view('userpages.connectors', compact('connectors'));
    }

    public function bot()
    {
        $user = auth()->user(); // Get the currently authenticated user
        $bots = Bot::all();
        $connectors = ExchangeConnector::all();
        $symbols = TradingSymbol::all();
        $strategies = $user->strategies; // Retrieve strategies added by the user

        return view('userpages.bot', compact('bots', 'connectors', 'symbols', 'strategies'));
    }

    public function strategyMarket()
    {
        $strategies = Strategy::all();
        $symbols = TradingSymbol::all();
        return view('userpages.strategy-market',compact('strategies','symbols'));
    }
}

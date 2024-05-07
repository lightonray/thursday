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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }
    
    /**
     * Display the exchange page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function exchange()
    {
        return view('userpages.exchange');
    }

    /**
     * Display the connectors page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function connectors()
    {
        $connectors = ExchangeConnector::where('user_id', Auth::id())->get();
        return view('userpages.connectors', compact('connectors'));
    }

    /**
     * Display the bot page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function bot()
    {
        $user = auth()->user();
        $bots = Bot::all();
        $connectors = ExchangeConnector::all();
        $symbols = TradingSymbol::all();
        $strategies = $user->strategies; 

        return view('userpages.bot', compact('bots', 'connectors', 'symbols', 'strategies'));
    }

    /**
     * Display the strategy market page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function strategyMarket()
    {
        $strategies = Strategy::all();
        $symbols = TradingSymbol::all();
        return view('userpages.strategy-market',compact('strategies','symbols'));
    }

    /**
     * Display the user strategies page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function userStrategies()
    {
        $user = auth()->user();
        
        $strategies = $user->strategies;

        return view('userpages.user-strategies',compact('strategies'));
    }

     /**
     * Display the profile of a specific strategy.
     *
     * @param  int  $strategyId
     * @return \Illuminate\Contracts\View\View
     */
    public function showStrategyProfile($strategyId)
    {
        $strategy = Strategy::findOrFail($strategyId);
        $options = json_decode($strategy->options, true);

        return view('strategies.profile', compact('strategy', 'options'));
    }
}

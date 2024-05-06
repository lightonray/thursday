<?php

namespace App\Http\Controllers\TradingBots;

use App\Models\Bot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TradingBotController extends Controller
{
    public function storeBot(Request $request) {

        $request->validate([
            'bot_name' => 'required',
            'exchange_connector' => 'required|exists:exchange_connectors,id',
            'symbol' => 'required|exists:trading_symbols,symbol',
        ]);

        $bot = Bot::create([
            'name' => $request->bot_name,
            'user_id' => Auth::id(),
            'exchange_connector_id' => $request->exchange_connector,
            'strategy_id' => $request->strategy,
            'symbol' => $request->symbol
        ]);

        return response()->json(['success' => true, 'message' => 'Bot created successfully.', 'data' => $bot]);
    }
    

    public function addStrategy(Request $request)
    {
        $user = auth()->user();
        $strategyId = $request->input('strategy_id');

        if ($user->strategies()->where('strategy_id', $strategyId)->exists()) {
            return response()->json(['error' => 'Strategy already added'], 409);
        }

        $user->strategies()->attach($strategyId);
        return response()->json(['success' => 'Strategy added successfully']);
    }
}

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

    public function showBotProfile($botId)
    {
        $bot = Bot::with(['exchangeConnector', 'strategy'])->findOrFail($botId);

        return view('bots.profile', compact('bot'));
    }
}

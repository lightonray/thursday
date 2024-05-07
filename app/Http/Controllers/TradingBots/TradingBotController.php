<?php

namespace App\Http\Controllers\TradingBots;

use App\Models\Bot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Strategy;
use App\Services\DeribitService;

class TradingBotController extends Controller
{
    /**
     * The Deribit service instance.
     *
     * @var \App\Services\DeribitService
     */
    protected $deribitService;

    /**
     * Create a new controller instance.
     *
     * @param  \App\Services\DeribitService  $deribitService
     * @return void
     */
    public function __construct(DeribitService $deribitService)
    {
        $this->deribitService = $deribitService;
    }

    /**
     * Store a newly created bot in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeBot(Request $request)
    {
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
            'symbol' => $request->symbol,
        ]);

        return response()->json(['success' => true, 'message' => 'Bot created successfully.', 'data' => $bot]);
    }

    /**
     * Display the specified bot profile.
     *
     * @param  int  $botId
     * @return \Illuminate\Contracts\View\View
     */
    public function showBotProfile($botId)
    {
        $bot = Bot::with(['exchangeConnector', 'strategy'])->findOrFail($botId);

        return view('bots.profile', compact('bot'));
    }

    /**
     * Start the specified bot.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function startBot(Request $request)
    {
        $botId = $request->input('bot_id');
        $bot = Bot::find($botId);
        $strategy = Strategy::findOrFail($bot->strategy_id);

        if (!$strategy) {
            return response()->json(['error' => 'Strategy not found'], 404);
        }

        $result = $this->deribitService->startBot($strategy, $bot->symbol);

        if (isset($result['error'])) {
            return response()->json(['error' => $result['message']], 400);
        }

        $bot->status = 'running';
        $bot->save();

        return response()->json(['success' => 'Bot started successfully', 'data' => $result]);
    }

    /**
     * Stop the specified bot.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function stopBot(Request $request)
    {
        $botId = $request->input('bot_id');
        $bot = Bot::findOrFail($botId);
        $strategy = Strategy::findOrFail($bot->strategy_id);

        if (!$strategy) {
            return response()->json(['error' => 'Strategy not found'], 404);
        }

        $result = $this->deribitService->stopBot($strategy, $bot->symbol);

        if (isset($result['error'])) {
            return response()->json(['error' => $result['message']], 400);
        }

        $bot->status = 'stopped';
        $bot->save();

        return response()->json(['success' => 'Bot stopped successfully', 'data' => $result]);
    }
}

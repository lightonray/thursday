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
    protected $deribitService;

    public function __construct(DeribitService $deribitService)
    {
        $this->deribitService = $deribitService;
    }

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


      // Start the bot
      public function startBot(Request $request, $botId)
      {
          $bot = Bot::findOrFail($botId);
          $strategy = Strategy::findOrFail($bot->strategy_id);
  
          if (!$strategy) {
              return response()->json(['error' => 'Strategy not found'], 404);
          }
  
          // Call the DeribitService to start the bot
          $result = $this->deribitService->startBot($strategy, $bot->symbol);
  
          if (isset($result['error'])) {
              return response()->json(['error' => $result['message']], 400);
          }
  
          // Update bot status to 'running'
          $bot->status = 'running';
          $bot->save();
  
          return response()->json(['success' => 'Bot started successfully', 'data' => $result]);
      }
  
      // Stop the bot
      public function stopBot(Request $request, $botId)
      {
          $bot = Bot::findOrFail($botId);
  
          // Assuming we have a method to get the position ID
          $positionId = $bot->position_id; // You'll need to manage position IDs when starting bots
  
          $result = $this->deribitService->stopBot($positionId);
  
          if (isset($result['error'])) {
              return response()->json(['error' => $result['message']], 400);
          }
  
          // Update bot status to 'stopped'
          $bot->status = 'stopped';
          $bot->save();
  
          return response()->json(['success' => 'Bot stopped successfully', 'data' => $result]);
      }
}

<?php

namespace App\Http\Controllers\ExchangeConnectors;

use Illuminate\Http\Request;
use App\Models\ExchangeConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExchangeConnectorController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'exchange_name' => 'required',
            'public_key' => 'required',
            'private_key' => 'required',
        ]);
    
        $connector = ExchangeConnector::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'exchange_name' => $request->exchange_name,
            'public_key' => $request->public_key,
            'private_key' => $request->private_key,
        ]);
    
        return response()->json(['success' => true, 'data' => $connector]);
    }

    public function delete($id)
    {
        $connector = ExchangeConnector::with('bots')->find($id);
        if (!$connector) {
            return redirect()->back()->with('error', 'Connector not found');
        }

        // Delete all associated bots first
        foreach ($connector->bots as $bot) {
            $bot->delete();  // Or handle any cleanup necessary before deletion
        }

        // Now delete the exchange connector
        $connector->delete();
        return redirect()->route('user.connectors')->with('success', 'Connector and all associated bots deleted successfully');
    }
}

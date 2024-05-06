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
}

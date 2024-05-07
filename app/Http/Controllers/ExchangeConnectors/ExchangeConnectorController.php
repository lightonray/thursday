<?php

namespace App\Http\Controllers\ExchangeConnectors;

use Illuminate\Http\Request;
use App\Models\ExchangeConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExchangeConnectorController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $connector = ExchangeConnector::with('bots')->find($id);
        if (!$connector) {
            return redirect()->back()->with('error', 'Connector not found');
        }

        foreach ($connector->bots as $bot) {
            $bot->delete();
        }

        $connector->delete();
        return redirect()->route('user.connectors')->with('success', 'Connector and all associated bots deleted successfully');
    }
}

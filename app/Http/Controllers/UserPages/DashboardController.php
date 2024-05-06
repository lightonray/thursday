<?php

namespace App\Http\Controllers\UserPages;

use Illuminate\Http\Request;
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
}

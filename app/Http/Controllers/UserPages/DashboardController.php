<?php

namespace App\Http\Controllers\UserPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('userpages.connectors');
    }
}

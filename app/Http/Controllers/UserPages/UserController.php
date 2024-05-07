<?php

namespace App\Http\Controllers\UserPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('userpages.dashboard');
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

    public function viewProfile()
    {
        return view('userpages.profile');
    }
}

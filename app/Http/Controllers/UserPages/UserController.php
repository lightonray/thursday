<?php

namespace App\Http\Controllers\UserPages;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $user = auth()->user();
        $userprofile = User::with('profile')->findOrFail($user->id);
    
        // Pass the user data to the profile view
        return view('userpages.profile', compact('userprofile'));
    }
}

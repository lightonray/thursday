<?php

namespace App\Http\Controllers\UserPages;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\DeribitService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $deribitService;

    public function __construct(DeribitService $deribitService)
    {   
        $this->middleware('auth');
        $this->deribitService = $deribitService;
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

    public function fetchAccountSummary()
    {
        $deribitService = new DeribitService(auth()->user()); // Assuming you pass the authenticated user
        $summary = $deribitService->getAccountSummary(); // Fetch account summary for 'BTC' by default

        if (isset($summary['error'])) {
            return response()->json(['error' => 'Failed to fetch account data', 'details' => $summary['error']], 400);
        }

        return response()->json([
            'success' => true,
            'available_withdrawal_funds' => $summary['result']['available_withdrawal_funds'] ?? 0
        ]);
    }
}

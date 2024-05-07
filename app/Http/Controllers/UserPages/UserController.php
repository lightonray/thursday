<?php

namespace App\Http\Controllers\UserPages;

use App\Models\User;
use App\Models\Strategy;
use Illuminate\Http\Request;
use App\Services\DeribitService;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
        $this->middleware('auth');
        $this->deribitService = $deribitService;
    }

    /**
     * Display the user dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        $user = auth()->user();
        $totalBots = $user->bots()->count();
        return view('userpages.dashboard', compact('user', 'totalBots'));
    }

    /**
     * Add a strategy to the user's list of strategies.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * View the user's profile.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function viewProfile()
    {
        $user = auth()->user();
        $userprofile = User::with('profile')->findOrFail($user->id);
    
        return view('userpages.profile', compact('userprofile'));
    }

    /**
     * Fetch the account summary of the user from Deribit.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchAccountSummary()
    {
        $deribitService = new DeribitService(auth()->user());
        $summary = $deribitService->getAccountSummary();

        if (isset($summary['error'])) {
            return response()->json(['error' => 'Failed to fetch account data', 'details' => $summary['error']], 400);
        }

        return response()->json([
            'success' => true,
            'available_withdrawal_funds' => $summary['result']['available_withdrawal_funds'] ?? 0
        ]);
    }


     /**
     * Remove a strategy from the user's list of strategies.
     *
     * @param  int  $strategyId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeStrategy($strategyId)
    {
        $user = auth()->user();

        $strategy = Strategy::findOrFail($strategyId);

        $user->strategies()->detach($strategy);

        return redirect()->back()->with('success', 'Strategy removed from user successfully');
    }
}

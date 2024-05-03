<?php

namespace App\Http\Controllers\UserPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('userpages.dashboard');
    }
}

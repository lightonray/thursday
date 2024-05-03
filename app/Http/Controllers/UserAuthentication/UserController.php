<?php

namespace App\Http\Controllers\UserAuthentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('userauthentication.login');
    }
    
    public function register()
    {
        return view('userauthentication.register');
    }

    public function forgotpassword()
    {
        return view('userauthentication.forgotpassword');
    }
}

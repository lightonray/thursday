<?php

namespace App\Http\Controllers\UserAuthentication;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class UserController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('userauthentication.login');
    }
    
    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
            'email.email' => 'Invalid email format.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect based on user role
            // if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('moderator')) {
            //     return redirect()->route(RouteServiceProvider::HOME);
            // } else {
                return redirect()->to(RouteServiceProvider::USERHOME);
            // }
        }

        return back()->withErrors(['login_error' => 'Invalid credentials.']);
    }

    /**
     * Display the registration form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function register()
    {
        return view('userauthentication.register');
    }

     /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $customMessages = [
            'first_name.required' => 'Please enter your first name.',
            'first_name.string' => 'First name must be a string.',
            'first_name.max' => 'First name may not be greater than 255 characters.',
            'last_name.required' => 'Please enter your last name.',
            'last_name.string' => 'Last name must be a string.',
            'last_name.max' => 'Last name may not be greater than 255 characters.',
            'email.required' => 'An email address is required.',
            'email.string' => 'Email must be a string.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email may not be greater than 255 characters.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'A password is required.',
            'password.string' => 'Password must be a string.',
            'password.min' => 'Password must be at least 6 characters long.',
            'password.confirmed' => 'Passwords do not match.',
        ];

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], $customMessages);

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->back()->with('success', 'Registered successfully!');
    }



    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }


    /**
     * Display the forgot password form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function forgotpassword()
    {
        return view('userauthentication.forgotpassword');
    }
}

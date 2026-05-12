<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //show login form view
    public function showLoginForm(): \Illuminate\View\View
    {
        return view('auth.login');
    }

    //handle login request  
    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        //validate login credentials
        $request->validate(
            [
                'login' => 'required|string',
                'password' => 'required|string',
            ],
            [
                'login.required' => 'Please enter your email address or username.',
                'password.required' => 'Please enter your password.',
            ]
        );

        //check if the login field is email or username
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //store the credentials
        $credentials = [
            $loginField => $request->login,
            'password' => $request->password,
        ];

        //auth facade and the attempt method() used to check the database credentials
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            //regenerate session
            $request->session()->regenerate();
            //redirect to dashboard
            return redirect()->intended(route('dashboard'));
        }

        //if the credentials do not match, redirect back to login form with error message
        return back()
            ->withErrors([
                'login' => 'These credentials do not match our records. Check your email or username and password, then try again.',
            ])
            ->onlyInput('login');
    }
    
    //handle logout request
    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        //invalidate the user's authentication using Auth facade
        Auth::logout();

        //destroy the session data
        $request->session()->invalidate();
        //regenerate CSRF token for security
        $request->session()->regenerateToken();

        //redirect to login page
        return redirect('/');
    }
}

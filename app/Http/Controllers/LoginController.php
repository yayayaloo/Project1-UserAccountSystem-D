<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(): \Illuminate\View\View
    {
        return view('auth.login');
    }

    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
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

        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginField => $request->login,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()
            ->withErrors([
                'login' => 'These credentials do not match our records. Check your email or username and password, then try again.',
            ])
            ->onlyInput('login');
    }

    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

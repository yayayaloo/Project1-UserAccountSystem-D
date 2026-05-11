<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    public function showChangeForm(): \Illuminate\View\View
    {
        return view('password.change');
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate(
            [
                'current_password' => 'required|string',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).*$/',
                    'confirmed',
                    'different:current_password',
                ],
            ],
            [
                'password.min' => 'Password must be at least 8 characters.',
                'password.regex' => 'Password must include at least one uppercase letter, one number, and one special character.',
                'password.confirmed' => 'Confirm password must match the password.',
            ]
        );

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'Password changed successfully!');
    }
}
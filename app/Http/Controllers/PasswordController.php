<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PasswordController extends Controller
{
    //show change password form view
    public function showChangeForm(): \Illuminate\View\View
    {
        return view('password.change');
    }

    //handle password update request
    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();

        //validate password input with complexity rules and custom error messages
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

        //verify current password matches the stored hashed password using Hash facade
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        //hash the new password using Hash facade (bcrypt) and update in database
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        //redirect to dashboard with success message
        return redirect()->route('dashboard')->with('success', 'Password changed successfully!');
    }
}
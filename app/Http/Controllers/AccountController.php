<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountController extends Controller
{
    //show delete account confirmation form view
    public function showDeleteForm(): \Illuminate\View\View
    {
        return view('account.delete');
    }

    //handle account deletion request
    public function delete(Request $request): \Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();

        //validate that password is provided
        $request->validate([
            'password' => 'required|string',
        ]);

        //verify password matches stored hash using Hash facade
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password is incorrect.']);
        }

        //delete the user record from the database using Eloquent ORM
        $user->delete();

        //logout the user using Auth facade
        Auth::logout();

        //invalidate the session and regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //redirect to login page with success confirmation message
        return redirect()
            ->route('login')
            ->with('success', 'Account deleted successfully.');
    }
}
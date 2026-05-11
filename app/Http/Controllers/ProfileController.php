<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(): \Illuminate\View\View
    {
        /** @var User $user */
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => [
                'required',
                'string',
                'email',
                'max:100',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }
}
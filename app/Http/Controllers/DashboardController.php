<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    //show dashboard view with user account information
    public function index(): \Illuminate\View\View
    {
        /** @var User $user */
        //get the currently authenticated user using Auth facade
        $user = Auth::user();
        //pass user data to the dashboard view
        return view('dashboard', compact('user'));
    }
}

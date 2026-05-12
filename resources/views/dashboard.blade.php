{{-- extends the main app layout --}}
@extends('layouts.app')

@section('title', 'Dashboard')

{{-- include the authenticated navigation bar --}}
@section('navbar')
    <x-app-navbar />
@endsection

@section('content')
    <div class="container mt-4">
        {{-- personalized welcome message using the authenticated user's name --}}
        <div class="alert alert-success" role="alert">
            Welcome back, {{ $user->first_name }} {{ $user->last_name }}!
        </div>

        {{-- display flash success message (e.g. after password change) --}}
        <x-flash-success />

        {{-- account information card — shows full name, username, and email --}}
        <div class="card">
            <div class="card-header">
                <h5>Account Information</h5>
            </div>
            <div class="card-body">
                {{-- full name displayed using first_name and last_name from the User model --}}
                <p><strong>Full Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
                <p><strong>Username:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection

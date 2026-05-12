{{-- extends the main app layout --}}
@extends('layouts.app')

@section('title', 'Register')

@section('content')
    {{-- registration form inside the auth card component --}}
    <x-auth-card title="Register">
        {{-- form submits via POST to the register route --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- first name input field --}}
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                       id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                {{-- display validation error for first name --}}
                @error('first_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- last name input field --}}
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                       id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                {{-- display validation error for last name --}}
                @error('last_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- email address input field --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                {{-- display validation error for email --}}
                @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- username input field --}}
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror"
                       id="username" name="username" value="{{ old('username') }}" required autocomplete="username">
                {{-- display validation error for username --}}
                @error('username')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- password input field with complexity hint --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required autocomplete="new-password">
                {{-- display validation error for password --}}
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
                <div class="form-text">At least 8 characters, one uppercase letter, one number, and one special character.</div>
            </div>

            {{-- confirm password field — Laravel checks this matches the password field via 'confirmed' rule --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control"
                       id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{ route('login') }}" class="btn btn-outline-secondary">Back to Login</a>
            </div>
        </form>
    </x-auth-card>
@endsection

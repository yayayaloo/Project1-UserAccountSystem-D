{{-- extends the main app layout --}}
@extends('layouts.app')

@section('title', 'Login')

@section('content')
    {{-- login form inside the auth card component --}}
    <x-auth-card title="Login">
        {{-- display success flash message (e.g. after registration or account deletion) --}}
        <x-flash-success />

        {{-- form submits via POST to the login route --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- accepts email address or username --}}
            <div class="mb-3">
                <label for="login" class="form-label">Email or Username</label>
                <input type="text" class="form-control @error('login') is-invalid @enderror"
                       id="login" name="login" value="{{ old('login') }}" required autocomplete="username">
                {{-- display validation or authentication error --}}
                @error('login')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- password input field --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required autocomplete="current-password">
                {{-- display validation error for password --}}
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- remember me checkbox — keeps the user logged in using remember_token --}}
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Create an account</a>
            </div>
        </form>
    </x-auth-card>
@endsection

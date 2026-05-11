@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <x-auth-card title="Login">
        <x-flash-success />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="login" class="form-label">Email or Username</label>
                <input type="text" class="form-control @error('login') is-invalid @enderror"
                       id="login" name="login" value="{{ old('login') }}" required autocomplete="username">
                @error('login')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

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

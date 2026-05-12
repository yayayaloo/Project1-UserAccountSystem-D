{{-- extends the main app layout --}}
@extends('layouts.app')

@section('title', 'Change Password')

{{-- include the authenticated navigation bar --}}
@section('navbar')
    <x-app-navbar />
@endsection

@section('content')
    {{-- change password form inside the auth card component --}}
    <x-auth-card title="Change Password">
        {{-- form submits via PUT to the password update route --}}
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('PUT')

            {{-- current password — verified against stored hash using Hash::check() --}}
            <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                       id="current_password" name="current_password" required>
                {{-- display error if current password is incorrect --}}
                @error('current_password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- new password — must meet complexity rules and differ from current password --}}
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required>
                {{-- display validation error for new password --}}
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- confirm new password — must match new password via 'confirmed' rule --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control"
                       id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Change Password</button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </x-auth-card>
@endsection

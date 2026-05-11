@extends('layouts.app')

@section('title', 'Delete Account')

@section('navbar')
    <x-app-navbar />
@endsection

@section('content')
    <x-auth-card
        title="Delete Account"
        card-class="border-danger"
        header-class="bg-danger text-white"
    >
        <p class="text-danger">Warning: This action cannot be undone. Your account and all associated data will be permanently deleted.</p>

        <form method="POST" action="{{ route('account.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
            @csrf
            @method('DELETE')

            <div class="mb-3">
                <label for="password" class="form-label">Enter your current password to confirm</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required>
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger">Delete Account</button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </x-auth-card>
@endsection

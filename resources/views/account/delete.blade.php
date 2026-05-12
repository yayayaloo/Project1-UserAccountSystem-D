{{-- extends the main app layout --}}
@extends('layouts.app')

@section('title', 'Delete Account')

@section('navbar')
    <x-app-navbar />
@endsection

@section('content')
    {{-- delete account card with danger styling --}}
    <x-auth-card
        title="Delete Account"
        card-class="border-danger"
        header-class="bg-danger text-white"
    >
        {{-- warning message to inform user this action is permanent --}}
        <p class="text-danger">Warning: This action cannot be undone. Your account and all associated data will be permanently deleted.</p>

        {{-- form with JavaScript confirmation prompt before submitting --}}
        <form method="POST" action="{{ route('account.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
            @csrf
            @method('DELETE')

            {{-- require current password to confirm deletion --}}
            <div class="mb-3">
                <label for="password" class="form-label">Enter your current password to confirm</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required>
                {{-- display validation error for password --}}
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


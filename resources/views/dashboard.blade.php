@extends('layouts.app')

@section('title', 'Dashboard')

@section('navbar')
    <x-app-navbar />
@endsection

@section('content')
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            Welcome back, {{ $user->first_name }} {{ $user->last_name }}!
        </div>

        <x-flash-success />

        <div class="card">
            <div class="card-header">
                <h5>Account Information</h5>
            </div>
            <div class="card-body">
                <p><strong>Full Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
                <p><strong>Username:</strong> {{ $user->username }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection

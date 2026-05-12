{{-- navigation bar component — displayed on all authenticated pages --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        {{-- brand link — navigates back to dashboard --}}
        <a href="{{ route('dashboard') }}" class="navbar-brand mb-0">User Account Management System</a>
        {{-- navigation links for authenticated features --}}
        <div class="navbar-nav ms-auto">
            <a href="{{ route('profile.edit') }}" class="nav-link">Edit Profile</a>
            <a href="{{ route('password.change') }}" class="nav-link">Change Password</a>
            <a href="{{ route('account.delete') }}" class="nav-link">Delete Account</a>
            {{-- logout form — uses POST method with CSRF protection --}}
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light ms-2">Logout</button>
            </form>
        </div>
    </div>
</nav>


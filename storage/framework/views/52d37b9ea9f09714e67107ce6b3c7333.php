<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('dashboard')); ?>" class="navbar-brand mb-0">User Account Management System</a>
        <div class="navbar-nav ms-auto">
            <a href="<?php echo e(route('profile.edit')); ?>" class="nav-link">Edit Profile</a>
            <a href="<?php echo e(route('password.change')); ?>" class="nav-link">Change Password</a>
            <a href="<?php echo e(route('account.delete')); ?>" class="nav-link">Delete Account</a>
            <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-outline-light ms-2">Logout</button>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/components/app-navbar.blade.php ENDPATH**/ ?>
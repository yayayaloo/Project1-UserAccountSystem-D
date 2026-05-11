<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User Account Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">User Account Management System</a>
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

    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            Welcome back, <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>!
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                <h5>Account Information</h5>
            </div>
            <div class="card-body">
                <p><strong>Full Name:</strong> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></p>
                <p><strong>Username:</strong> <?php echo e($user->username); ?></p>
                <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\IT-ELECTIVE 3 PROJECT\resources\views/dashboard.blade.php ENDPATH**/ ?>
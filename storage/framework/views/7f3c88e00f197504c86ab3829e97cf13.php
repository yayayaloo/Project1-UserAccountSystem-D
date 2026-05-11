<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> — User Account Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="<?php echo $__env->yieldContent('body_class', 'bg-light'); ?>">
    <?php if (! empty(trim($__env->yieldContent('navbar')))): ?>
        <?php echo $__env->yieldContent('navbar'); ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/layouts/app.blade.php ENDPATH**/ ?>
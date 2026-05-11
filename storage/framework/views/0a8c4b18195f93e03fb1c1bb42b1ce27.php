<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects - Student Grade Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Student Grade Tracker</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                <a class="nav-link" href="<?php echo e(route('students.index')); ?>">Students</a>
                <a class="nav-link active" href="<?php echo e(route('subjects.index')); ?>">Subjects</a>
                <a class="nav-link" href="<?php echo e(route('grades.index')); ?>">Grades</a>
            </div>
            <div class="navbar-nav ms-auto">
                <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Subjects</h1>
            <a href="<?php echo e(route('subjects.create')); ?>" class="btn btn-primary">Add New Subject</a>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Description</th>
                                <th>Enrolled Students</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($subject->subject_code); ?></td>
                                <td><?php echo e($subject->subject_name); ?></td>
                                <td><?php echo e($subject->description ?? 'N/A'); ?></td>
                                <td><?php echo e($subject->grades_count); ?></td>
                                <td>
                                    <a href="<?php echo e(route('subjects.show', $subject)); ?>" class="btn btn-sm btn-info">View</a>
                                    <a href="<?php echo e(route('subjects.edit', $subject)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form method="POST" action="<?php echo e(route('subjects.destroy', $subject)); ?>" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this subject?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center">No subjects found.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <?php echo e($subjects->links()); ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\IT-ELECTIVE 3 PROJECT\resources\views/subjects/index.blade.php ENDPATH**/ ?>
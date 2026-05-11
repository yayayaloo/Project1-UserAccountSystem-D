

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php if (isset($component)) { $__componentOriginal9ad8060e833be98a16aaaccaeef88ec5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ad8060e833be98a16aaaccaeef88ec5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ad8060e833be98a16aaaccaeef88ec5)): ?>
<?php $attributes = $__attributesOriginal9ad8060e833be98a16aaaccaeef88ec5; ?>
<?php unset($__attributesOriginal9ad8060e833be98a16aaaccaeef88ec5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ad8060e833be98a16aaaccaeef88ec5)): ?>
<?php $component = $__componentOriginal9ad8060e833be98a16aaaccaeef88ec5; ?>
<?php unset($__componentOriginal9ad8060e833be98a16aaaccaeef88ec5); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            Welcome back, <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>!
        </div>

        <?php if (isset($component)) { $__componentOriginal08ada8cb1e17d6f725ebb1cb88b4168d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08ada8cb1e17d6f725ebb1cb88b4168d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash-success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flash-success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08ada8cb1e17d6f725ebb1cb88b4168d)): ?>
<?php $attributes = $__attributesOriginal08ada8cb1e17d6f725ebb1cb88b4168d; ?>
<?php unset($__attributesOriginal08ada8cb1e17d6f725ebb1cb88b4168d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08ada8cb1e17d6f725ebb1cb88b4168d)): ?>
<?php $component = $__componentOriginal08ada8cb1e17d6f725ebb1cb88b4168d; ?>
<?php unset($__componentOriginal08ada8cb1e17d6f725ebb1cb88b4168d); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/dashboard.blade.php ENDPATH**/ ?>
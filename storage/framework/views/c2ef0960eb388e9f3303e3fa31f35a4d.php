

<?php $__env->startSection('title', 'Edit Profile'); ?>

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
    <?php if (isset($component)) { $__componentOriginalc3ffbec469e53ba0c225d6242a0ccc8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc3ffbec469e53ba0c225d6242a0ccc8d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-card','data' => ['title' => 'Edit Profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Edit Profile']); ?>
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

        <form method="POST" action="<?php echo e(route('profile.update')); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="first_name" name="first_name" value="<?php echo e(old('first_name', $user->first_name)); ?>" required>
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="last_name" name="last_name" value="<?php echo e(old('last_name', $user->last_name)); ?>" required>
                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" value="<?php echo e($user->username); ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="email" name="email" value="<?php echo e(old('email', $user->email)); ?>" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Update Profile</button>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc3ffbec469e53ba0c225d6242a0ccc8d)): ?>
<?php $attributes = $__attributesOriginalc3ffbec469e53ba0c225d6242a0ccc8d; ?>
<?php unset($__attributesOriginalc3ffbec469e53ba0c225d6242a0ccc8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3ffbec469e53ba0c225d6242a0ccc8d)): ?>
<?php $component = $__componentOriginalc3ffbec469e53ba0c225d6242a0ccc8d; ?>
<?php unset($__componentOriginalc3ffbec469e53ba0c225d6242a0ccc8d); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/profile/edit.blade.php ENDPATH**/ ?>
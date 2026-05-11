

<?php $__env->startSection('title', 'Delete Account'); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-card','data' => ['title' => 'Delete Account','cardClass' => 'border-danger','headerClass' => 'bg-danger text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Delete Account','card-class' => 'border-danger','header-class' => 'bg-danger text-white']); ?>
        <p class="text-danger">Warning: This action cannot be undone. Your account and all associated data will be permanently deleted.</p>

        <form method="POST" action="<?php echo e(route('account.destroy')); ?>" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <div class="mb-3">
                <label for="password" class="form-label">Enter your current password to confirm</label>
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="password" name="password" required>
                <?php $__errorArgs = ['password'];
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
                <button type="submit" class="btn btn-danger">Delete Account</button>
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/account/delete.blade.php ENDPATH**/ ?>
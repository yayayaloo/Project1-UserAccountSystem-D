<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'cardClass' => '',
    'headerClass' => '',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title',
    'cardClass' => '',
    'headerClass' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card <?php echo e($cardClass); ?>">
                <div class="card-header <?php echo e($headerClass); ?>">
                    <h3 class="text-center"><?php echo e($title); ?></h3>
                </div>
                <div class="card-body">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\minim\Documents\Project1-UserAccountSystem-D\resources\views/components/auth-card.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['tags']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['tags']); ?>
<?php foreach (array_filter((['tags']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$tagsExplode = explode(',', $tags);
?>

<?php $__currentLoopData = $tagsExplode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="badge badge-primary" style="padding: 5px;"><a href="/?tag=<?php echo e(trim($tag)); ?>" style="color: white; font-size: 140%;"><?php echo e(trim($tag)); ?></a></span>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH A:\XAMPP\htdocs\Job-Listings-Application\resources\views/components/listing-tags.blade.php ENDPATH**/ ?>
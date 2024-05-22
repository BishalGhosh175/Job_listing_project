

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if (! (count($listings) == 0)): ?>

    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title left">
                                        <h2>Latest Jobs</h2>
                                        <!-- <span class="view-more"><a href="# " class="btn n-btn-rounded"> View All </a></span> -->
                                    </div>
                                </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="n-features-job-two-box clear-custom" style="width: 100%;">
<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; float:left;">
                    <div class="n-featured-single">
                        <div class="n-featured-single-top">
                            <div class="n-featured-singel-img">
                                <a href="listings/<?php echo e($listing['id']); ?>"><img src="<?php echo e($listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))); ?>" class="img-responsive" alt="logo"></a>
                            </div>
                            <div class="n-featured-singel-meta">
                                <h4><a href="listings/<?php echo e($listing['id']); ?>"><?php echo e($listing->title); ?></a></h4>

                                <p><i class="fa fa-map-marker"></i><a href=""> <?php echo e($listing->location); ?></a></p>
                                <div class="n-cat"><?php echo e(substr($listing->description, 0, 135)); ?>...</div>

                            </div>

                        </div>
                        <div class="n-featured-single-bottom">
                            <center>
                                <span class="badge badge-info" style="font-size: 140%; padding: 5px; background-color: #17a2b8;">Tags: </span>  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-tags','data' => ['tags' => $listing->tags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </center>
                        </div>
                    </div>
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <p>No listings found.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\XAMPP\htdocs\Job-Listings-Application\resources\views/listings.blade.php ENDPATH**/ ?>
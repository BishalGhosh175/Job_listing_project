

<?php $__env->startSection('content'); ?>

    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-featured-jobs-two">

                        <div class="container">
                            <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="n-features-job-two-box clear-custom" style="width: 100%">
                <?php echo $__env->make('partials._onlysearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 100%">
                    <div class="n-featured-single" style="padding: 50px;  border: 5px solid rgb(251, 35, 106);" >
                        <div class="n-featured-single-top">
                            <center>
                                <a href="<?php echo e($listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))); ?>"><img style="max-width: 50%; height: auto;" src="<?php echo e($listing->logo ? asset(('storage/' . $listing['logo'])) : asset(('img/nologo.jpg'))); ?>" class="img-responsive" alt="logo"></a>

                            <div class="n-featured-singel-meta">
                                <h2><a href="listings/<?php echo e($listing['id']); ?>"><?php echo e($listing->title); ?></a> <br><?php echo e($listing->company); ?></h2>
                                <p><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
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
<?php endif; ?></p><br>
                                <p><i class="fa fa-map-marker"></i><a href="" style="font-size: 140%"> <?php echo e($listing->location); ?></a></p>
                                <br>
                                <h2>Job Description</h2>
                                <br>
                                <div class="n-cat"><?php echo e($listing->description); ?></div>

                            </div>
                                </center>
                        </div>
                        <div class="n-featured-single-bottom">

                        <center>
                        <a href ="mailto:<?php echo e($listing->email); ?>" class="btn n-btn-rounded">Contact</a>

                        <a href ="<?php echo e($listing->website); ?>" class="btn n-btn-rounded">Visit Website</a>

                        
                        </center>
                    </div>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH A:\XAMPP\htdocs\Job-Listings-Application\resources\views/listing.blade.php ENDPATH**/ ?>
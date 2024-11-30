<?php $__env->startSection('title'); ?>
    <?php echo e(__('Page Not Found')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <section class="banner__inner-page bg-image pt-180 pb-180 bg-image"
             data-background="<?php echo e(asset(setting('error_background'))); ?>">
        <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
            <img src="<?php echo e(asset(setting('error_banner_shape_2'))); ?>" alt="shape">
        </div>
        <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img src="<?php echo e(asset(setting('error_banner_shape_1'))); ?>" alt="shape">
        </div>
        <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
            <img class="sway__animationX" src="<?php echo e(asset(setting('error_banner_shape_3'))); ?>" alt="shape">
        </div>
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Page Not Found</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="<?php echo e(url(setting('error_breadcrumb_link'))); ?>"><?php echo e(setting('error_breadcrumb_title')); ?></a><span><i class="fa-regular fa-angles-right mx-2"></i>404</span>
            </div>
        </div>
    </section>
    

    
    <section class="error-area pt-120 pb-120">
        <div class="container">
            <div class="error__item">
                <div class="image mb-60">
                    <img src="<?php echo e(asset(setting('error_404'))); ?>" alt="image">
                </div>
                <h4 class="h3"><?php echo e(setting('error_heading')); ?></h4>
                <div class="btn-two mt-50">
                        <span class="btn-circle">
                        </span>
                    <a href="<?php echo e(url(setting('error_button_link'))); ?>" class="btn-one"><?php echo e(setting('error_button_title')); ?></a>
                </div>
            </div>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/errors/404.blade.php ENDPATH**/ ?>
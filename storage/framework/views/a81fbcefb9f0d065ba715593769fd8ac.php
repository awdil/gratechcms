<?php
    $content = $data->content;
    $serviceList = \App\Models\Services::getAllWithCache($content->limit_list->value);
?>
<section class="service-area pt-120 pb-120">
    <div class="service__shape wow slideInRight">
        <img class="sway_Y__animation" src="<?php echo e(asset($content->shape->value)); ?>" alt="shape">
    </div>
    <div class="container">
        <div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
            <div class="section-header">
                <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img class="me-1" src="<?php echo e(asset($content->title_icon->value)); ?>" alt="icon">
                    <?php echo e($content->sub_heading->value); ?>

                </h5>
                <h2 class="wow fadeInLeft" data-wow-delay="200ms"
                    data-wow-duration="1500ms"> <?php echo e($content->heading->value); ?></h2>
            </div>
            <a href="<?php echo e($content->button_link->value); ?>" class="btn-one wow fadeInUp" data-wow-delay="200ms"
               data-wow-duration="1500ms"><?php echo e($content->button_title->value); ?> <i
                        class="fa-regular fa-arrow-right-long"></i></a>
        </div>
        <div class="row g-4">
            <?php $__currentLoopData = $serviceList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
                    <div class="service__item">
                        <div class="service-shape">
                            <img src="<?php echo e(asset('general/static/shape/service-item-shape.png')); ?>" alt="shape">
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="service__icon">
                                <img src="<?php echo e(asset($service->dark_icon)); ?>" alt="icon">
                            </div>
                            <span class="bg-gradient p-1 mt-2 mb-0 rounded text-end "><?php echo e(__('Price: '). setting('currency_symbol').$service->price); ?></span>
                        </div>
                        <h4>
                            <a href="<?php echo e(route('service.details', ['slug' => $service->slug])); ?>"><?php echo e(_tr($service->name)); ?></a>
                        </h4>
                        <p><?php echo e(\Str::limit(filterRichText(_tr($service->description)), $content->limit_summary->value)); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_service_classic.blade.php ENDPATH**/ ?>
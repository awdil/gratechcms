<section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="<?php echo e(asset(setting('breadcrumb_background'))); ?>" style="background-image: url(<?php echo e(asset(setting('breadcrumb_background'))); ?>);">
	<div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
		<img src="<?php echo e(asset(setting('breadcrumb_shape_two'))); ?>" alt="shape">
	</div>
	<div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInLeft;">
		<img src="<?php echo e(asset(setting('breadcrumb_shape_one'))); ?>" alt="shape">
	</div>
	<div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInRight;">
		<img class="sway__animationX" src="<?php echo e(asset(setting('breadcrumb_shape_three'))); ?>" alt="shape">
	</div>
	<div class="container">
		<h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;"><?php echo $__env->yieldContent('title'); ?></h2>
		<div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
			<a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a><span><i class="fa-regular fa-angles-right mx-2"></i><?php echo $__env->yieldContent('title'); ?></span>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/partial/_breadcrumb.blade.php ENDPATH**/ ?>
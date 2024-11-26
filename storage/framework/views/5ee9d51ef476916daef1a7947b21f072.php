<section class="counter-area">
	<div class="container">
		<div class="counter__wrp gradient-bg">
			<div class="counter__shape wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
				<img src="<?php echo e(asset($data->content->shape_background->value)); ?>" alt="shape">
			</div>
			<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php ($content = $item->content); ?>
			<div class="counter__item wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1000ms">
				<img src="<?php echo e(asset($content->icon->value)); ?>" alt="icon">
				<div class="content">
					<h3><span class="count"><?php echo e($content->counter->value); ?></span>+</h3>
					<p class="text-white"><?php echo e($content->title->value); ?></p>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_counter.blade.php ENDPATH**/ ?>
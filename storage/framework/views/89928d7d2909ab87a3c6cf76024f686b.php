<?php ($content = $data->content); ?>
<section class="process-area pt-120 pb-120">
	<div class="container">
		<div class="section-header text-center mb-60">
			<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<img class="me-1" src="<?php echo e(asset($content->title_icon->value)); ?>" alt="icon">
				<?php echo e($content->sub_heading->value); ?>

			</h5>
			<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<?php echo e($content->heading->value); ?>

			</h2>
		</div>
		<div class="row g-4">
			<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php ($item = $item->content); ?>
				<div class="col-lg-4 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
					<div class="process__item mb-100">
						<div class="process-arry bobble__animation">
							<img src="<?php echo e(asset($item->array_icon->value)); ?>" alt="arry-icon">
						</div>
						<div class="process__image">
							<img src="<?php echo e(asset($item->process_icon->value)); ?>" alt="image">
							<span class="process-number"><?php echo e($item->process_number->value); ?></span>
						</div>
						<div class="process__content">
							<h4 class="mt-25 mb-10">
								<?php echo e($item->title->value); ?>

							</h4>
							<p><?php echo e($item->description->value); ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/component/_work_process.blade.php ENDPATH**/ ?>
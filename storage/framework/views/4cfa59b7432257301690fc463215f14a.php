<section class="offer-area secondary-bg pt-120 pb-200">
	<div class="offer__shadow wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
		<img src="<?php echo e(asset($data->content->shadow_shape->value)); ?>" alt="shadow">
	</div>
	<div class="offer__shape-left">
		<img class="wow fadeInUpBig" data-wow-delay="400ms" data-wow-duration="1500ms"
		     src="<?php echo e(asset($data->content->shape_left->value)); ?>" alt="shape">
	</div>
	<div class="offer__shape-right">
		<img class="wow fadeInDownBig" data-wow-delay="400ms" data-wow-duration="1500ms"
		     src="<?php echo e(asset($data->content->shape_right->value)); ?>" alt="shape">
	</div>
	<div class="container">
		<div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-95">
			<div class="section-header">
				<h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
					<img class="me-1" src="<?php echo e(asset($data->content->title_icon->value)); ?>" alt="icon">
					<?php echo e($data->content->sub_heading->value); ?>

				</h5>
				<h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
					<?php echo nl2br(wordwrap($data->content->heading->value, 30, "<br>")); ?>

				</h2>
			</div>
			<a href="<?php echo e($data->content->button_link->value); ?>" class="btn-one wow fadeInUp" data-wow-delay="200ms"
			   data-wow-duration="1500ms"><?php echo e($data->content->button_text->value); ?> <i class="fa-regular fa-arrow-right-long"></i></a>
		</div>
		<div class="row g-4">
			<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php ($content = $item->content); ?>
				<div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="<?php echo e($loop->iteration); ?>00ms"
					     data-wow-duration="1500ms">
						<div class="offer__item">
							<div class="shape-top">
								<img src="<?php echo e(asset($content->shape_top->value)); ?>" alt="shape">
							</div>
							<div class="shape-bottom">
								<img src="<?php echo e(asset($content->shape_bottom->value)); ?>" alt="shape">
							</div>
							<div class="offer__icon">
								<img src="<?php echo e(asset($content->svg_icon->value)); ?>" alt="icon">
							</div>
							<h4 class="text-white mt-20"><?php echo e($content->title->value); ?></h4>
						</div>
					</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_our_offering.blade.php ENDPATH**/ ?>
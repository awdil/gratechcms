<?php ($content = $data->content); ?>
<section class="case-area pt-120 pb-120">
	<div class="container">
		<div class="d-flex flex-wrap gap-4 align-items-center justify-content-between mb-60">
			<div class="section-header">
				<h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
					<img class="me-1" src="<?php echo e(asset($content->title_icon->value)); ?>" alt="icon">
					<?php echo e($content->sub_heading->value); ?>

				</h5>
				<h2 class="wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"> <?php echo e($content->heading->value); ?></h2>
			</div>
			<a href="<?php echo e($content->button_link->value); ?>" class="btn-one wow fadeInUp" data-wow-delay="200ms"
			   data-wow-duration="1500ms"> <?php echo e($content->button_title->value); ?> <i class="fa-regular fa-arrow-right-long"></i></a>
		</div>
	</div>
	<div class="swiper case__slider">
		<div class="swiper-wrapper">
			<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php ($itemContent = $item->content); ?>
			<div class="swiper-slide">
				<div class="case__item">
					<div class="image case__image">
						<img src="<?php echo e(asset($itemContent->cover_image->value)); ?>" alt="image">
					</div>
					<div class="case__content">
						<span class="primary-color sm-font"><?php echo e($itemContent->category->value); ?></span>
						<h3><a href="<?php echo e(route('content.details', ['section' => $data->section, 'id' => $item->id])); ?>" class="text-white primary-hover"><?php echo e($itemContent->heading->value); ?></a></h3>
					</div>
					<a href="<?php echo e(route('content.details', ['section' => $data->section, 'id' => $item->id])); ?>" class="case__btn">
						<i class="fa-regular fa-arrow-right"></i>
					</a>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<div class="mt-60 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
		<div class="dot case__dot"></div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_project_classic.blade.php ENDPATH**/ ?>
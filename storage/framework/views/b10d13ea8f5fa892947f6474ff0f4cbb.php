<section class="banner-area">
	<div class="banner__line">
		<img class="sway__animation" src="<?php echo e(asset($data->content->banner_line->value)); ?>" alt="shape">
	</div>
	<div class="swiper banner__slider">
		<div class="swiper-wrapper">
			<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php ($content = $item->content); ?>
				<div class="swiper-slide">
					<div data-animation="slideInLeft" data-duration="2s" data-delay=".3s"
					     class="banner__shape-left2">
						<img src="<?php echo e(asset($content->regular_left_shape->value)); ?>" alt="shape">
					</div>
					<div data-animation="slideInLeft" data-duration="2s" data-delay=".9s"
					     class="banner__shape-left1">
						<img src="<?php echo e(asset($content->solid_left_shape->value)); ?>" alt="shape">
					</div>
					<div class="banner__shape-left3 wow slideInLeft">
						<img class="sway__animation" src="<?php echo e(asset($content->shape_left->value)); ?>" alt="shape">
					</div>
					<div class="banner__shape-right2" data-animation="slideInRight" data-duration="3s"
					     data-delay=".3s">
						<img src="<?php echo e(asset($content->shape_right_line->value)); ?>" alt="shape">
					</div>
					<div class="banner__shape-right1" data-animation="slideInRight" data-duration="2s"
					     data-delay=".3s">
						<img src="<?php echo e(asset($content->shape_right->value)); ?>" alt="shape">
					</div>
					<div class="banner__right-line1" data-animation="slideInRight" data-duration="2s"
					     data-delay=".9s">
						<img src="<?php echo e(asset($content->right_line1->value)); ?>" alt="shape">
					</div>
					<div class="banner__right-line2" data-animation="slideInRight" data-duration="2s"
					     data-delay=".7s">
						<img src="<?php echo e(asset($content->right_line2->value)); ?>" alt="shape">
					</div>
					<div class="banner__right-line3" data-animation="slideInRight" data-duration="2s"
					     data-delay=".5s">
						<img src="<?php echo e(asset($content->right_line3->value)); ?>" alt="shape">
					</div>
					<div class="banner__right-line4" data-animation="slideInRight" data-duration="2s"
					     data-delay=".3s">
						<img src="<?php echo e(asset($content->right_line4->value)); ?>" alt="shape">
					</div>
					<div class="slide-bg" data-background="<?php echo e(asset($content->slide_bg->value)); ?>"></div>
					<div class="container">
						<div class="banner__content">
							<h4 data-animation="slideInRight" data-duration="2s" data-delay=".3s"
							    class="text-white mb-20">
								<svg class="me-1" width="40" height="16" viewBox="0 0 40 16" fill="none"
								     xmlns="http://www.w3.org/2000/svg">
									<rect x="0.5" y="0.500183" width="25.6667" height="15" rx="7.5"
									      stroke="white" />
									<rect x="13.3334" y="0.000183105" width="26.6667" height="16" rx="8"
									      fill="white" />
								</svg>

								<?php echo e($content->sub_heading->value); ?>

							</h4>
							<h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s"
							    class="text-white">
								<?php echo e($content->heading->value); ?>

							</h1>
							<p data-animation="slideInRight" data-duration="2s" data-delay=".7s" class="mt-20">
								<?php echo $content->description->value; ?>

							</p>
							<a data-animation="slideInRight" data-duration="2s" data-delay=".9s" href="<?php echo e($content->button_link->value); ?>"
							   class="btn-one mt-60"><?php echo e($content->button_title->value); ?> <i class="fa-regular fa-arrow-right-long"></i></a>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
		</div>
	</div>
	<div class="banner__dot-wrp">
		<div class="dot-light banner__dot"></div>
	</div>
</section>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_banner_classic_slider.blade.php ENDPATH**/ ?>
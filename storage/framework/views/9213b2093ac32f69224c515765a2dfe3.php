<?php ($content = $data->content); ?>
<section class="testimonial-area bg-image pt-120 pb-120" data-background="<?php echo e(asset($content->background->value)); ?>">
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
				<div class="talk-us__item">
					<div class="section-header mb-30">
						<h5 class="text-white">
							<svg width="28" height="12" viewBox="0 0 28 12" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<rect x="0.75" y="0.75" width="18.5" height="10.5" rx="5.25" stroke="white"
								      stroke-width="1.5" />
								<rect x="8" width="20" height="12" rx="6" fill="white" />
							</svg>
							<?php echo e($content->left_sub_heading->value); ?>

						</h5>
						<h2 class="text-white"><?php echo e($content->left_heading->value); ?></h2>
					</div>
					<form action="<?php echo e(route('contact.us')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<div class="row g-3">
							<div class="col-sm-6">
								<label for="name"><?php echo e(__('Your name')); ?>*</label>
								<input type="text" name="name" id="name" required>
							</div>
							<div class="col-sm-6">
								<label for="email"><?php echo e(__('Your Email')); ?>*</label>
								<input type="email" name="email" id="email" required>
							</div>
							<div class="col-sm-6">
								<label for="subject"><?php echo e(__('Subject')); ?></label>
								<input type="text" name="subject" id="subject" required>
							</div>
							<div class="col-sm-6">
								<label for="number"><?php echo e(__('Your Number')); ?></label>
								<input type="text" name="number" id="number" required>
							</div>
							<div class="col-12">
								<label for="massage"><?php echo e(__('Message')); ?>*</label>
								<textarea id="massage" name="massage" placeholder="Write Message" required></textarea>
							</div>
						</div>
						<button type="submit"><?php echo e(__('Send Message')); ?></button>
					</form>
				</div>
			</div>
			<div class="col-lg-6 ps-2 ps-lg-5">
				<div class="section-header mb-40">
					<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
						<img class="me-1" src="<?php echo e(asset($content->title_icon->value)); ?>" alt="icon">
						<?php echo e($content->right_sub_heading->value); ?>

					</h5>
					<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><?php echo e($content->right_heading->value); ?></h2>
					<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo e($content->right_description->value); ?></p>
				</div>
				<div class="swiper testimonial__slider wow fadeInDown" data-wow-delay="00ms"
				     data-wow-duration="1500ms">
					<div class="swiper-wrapper">
					
						<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php ($testimonialContent = $testimonial->content); ?>
							<div class="swiper-slide">
							<div class="testimonial__item">
								<svg class="coma" width="50" height="37" viewBox="0 0 50 37" fill="none"
								     xmlns="http://www.w3.org/2000/svg">
									<path d="M0 0V37L18.75 18.5V0H0ZM31.25 0V37L50 18.5V0H31.25Z"
									      fill="#3C72FC" />
								</svg>
								<div class="d-flex align-items-center gap-3">
									<img src="<?php echo e(asset($testimonialContent->testimonial_item_avatar->value)); ?>" alt="image">
									<div class="testi-info">
										<h4><?php echo e($testimonialContent->name->value); ?></h4>
										<p><?php echo e($testimonialContent->profession->value); ?></p>
										<div class="star mt-1">
											<?php for($i = 1; $i <= 5; $i++): ?>
												<?php if($i <= $testimonialContent->rating->value): ?>
													<i class="fa-sharp fa-solid fa-star"></i>
												<?php else: ?>
													<i class="fa-sharp fa-solid fa-star disable"></i>
												<?php endif; ?>
											<?php endfor; ?>
										</div>
									</div>
								</div>
								<p class="mt-30">“ <?php echo e($testimonialContent->comment->value); ?> ”</p>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="testimonial__arry-btn mt-40 wow fadeInDown" data-wow-delay="200ms"
				     data-wow-duration="1500ms">
					<button class="arry-prev testimonial__arry-prev"><i
							class="fa-light fa-chevron-left"></i></button>
					<button class="arry-next testimonial__arry-next active"><i
							class="fa-light fa-chevron-right"></i></button>
				</div>
			</div>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/component/_testimonial_premium.blade.php ENDPATH**/ ?>
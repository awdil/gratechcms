<section class="faq-area sub-bg pt-120 pb-120">
	<div class="faq__shape">
		<img class="sway__animationX" src="<?php echo e(asset($data->content->shape->value)); ?>" alt="shape">
	</div>
	<div class="container">
		<div class="row g-4">
			<div class="col-lg-5 pe-2 pe-lg-5">
				<div class="faq__image image wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="faq__line sway__animation">
						<img src="<?php echo e(asset($data->content->line->value)); ?>" alt="image">
					</div>
					<img src="<?php echo e(asset($data->content->image->value)); ?>" alt="image">
				</div>
			</div>
			<div class="col-lg-7 mt-60">
				<div class="section-header mb-40">
					<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
						<img class="me-1" src="<?php echo e(asset($data->content->title_icon->value)); ?>" alt="icon">
						<?php echo e($data->content->sub_heading->value); ?>

					</h5>
					<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> <?php echo e($data->content->heading->value); ?></h2>
				</div>
				<div class="faq__item">
					<div class="accordion" id="accordionExample">
						<?php $__currentLoopData = $data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php ($faq = $content->content); ?>
						<div class="accordion-item wow fadeInDown shadow border-none <?php if(setting('site_appearance') == 'dark_mode'): ?> dark-mode <?php endif; ?>" data-wow-delay="<?php echo e($loop->iteration); ?>00ms"
						     data-wow-duration="1500ms">
							<h2 class="accordion-header" id="headingOne<?php echo e($content->id); ?>">
								<button class="accordion-button <?php if($loop->iteration != 1 ): ?> collapsed <?php endif; ?>" type="button" data-bs-toggle="collapse"
								        data-bs-target="#collapseOne<?php echo e($content->id); ?>" aria-expanded="<?php if($loop->iteration == 1 ): ?> true <?php else: ?> false <?php endif; ?>"
								        aria-controls="collapseOne<?php echo e($content->id); ?>">
									<?php echo e($faq->question->value); ?>

								</button>
							</h2>
							<div id="collapseOne<?php echo e($content->id); ?>" class="accordion-collapse collapse <?php if($loop->iteration == 1 ): ?> show <?php endif; ?> "
							     aria-labelledby="headingOne<?php echo e($content->id); ?>" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p> <?php echo e($faq->answer->value); ?></p>
								</div>
							</div>
						</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/page/component/_faq.blade.php ENDPATH**/ ?>
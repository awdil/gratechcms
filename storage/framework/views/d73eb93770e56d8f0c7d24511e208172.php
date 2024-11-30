
<?php if(setting('footer_visibility')): ?>
	
<footer class="footer-two-area secondary-bg">
	<div class="footer__shape-regular-left wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
		<img src="<?php echo e(asset(setting('footer_slide_left_regular'))); ?>" alt="shape">
	</div>
	<div class="footer__shape-solid-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
		<img class="sway_Y__animation" src="<?php echo e(asset(setting('footer_slide_left_solid'))); ?>" alt="shape">
	</div>
	<div class="footer__shape-solid-right wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
		<img class="sway_Y__animation" src="<?php echo e(asset(setting('footer_right_regular'))); ?>" alt="shape">
	</div>
	<div class="footer__shape-regular-right wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
		<img src="<?php echo e(asset(setting('footer_right_solid'))); ?>" alt="shape">
	</div>
	<div class="footer__shadow-shape">
		<img src="<?php echo e(asset(setting('footer_shadow_shape'))); ?>" alt="shodow">
	</div>
	<div class="container">
		<div class="footer__wrp pt-100 pb-100">
			<div class="footer__item item-big wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<a href="<?php echo e(route('home')); ?>" class="logo mb-30">
					<img src="<?php echo e(asset(setting('light_logo'))); ?>" alt="image">
				</a>
				<p><?php echo e($contactInfo->content->footer_description->value); ?></p>
				<div class="social-icon">
					<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e($social->url); ?>" target="<?php echo e($social->target); ?>"><i class="<?php echo e($social->icon_class); ?>"></i></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>


			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title"><?php echo e(__('Our Services')); ?></h3>
				<ul>
					<?php $__currentLoopData = \App\Models\Services::getAllWithCache(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(route('service.details', ['slug' => $service->slug])); ?>"><i
									class="fa-regular fa-angles-right me-1"></i> <?php echo e(_tr($service->name)); ?></a></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>

			<div class="footer__item item-sm wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<h3 class="footer-title"><?php echo e(__('Quick Link')); ?></h3>
				<ul>
					<?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e($nav->slug == '/' ? route('home') : $nav->slug); ?>" target="<?php echo e($nav->target); ?>"><i class="fa-regular fa-angles-right me-1"></i> <?php echo e(_tr($nav->name)); ?></a></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>


			<div class="footer__item item-big wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
				<h3 class="footer-title"><?php echo e(__('Contact Us')); ?></h3>
				<p class="mb-20"><?php echo e($contactInfo->content->address->value); ?></p>
				<ul class="footer-contact">
					<li>
						<i class="fa-regular fa-clock"></i>
						<div class="info">
							<h5>
								<?php echo e(__('Opening Hours')); ?>:
							</h5>
							<p><?php echo e($contactInfo->content->opening_hours->value); ?></p>
						</div>
					</li>
					<li>
						<i class="fa-duotone fa-phone"></i>
						<div class="info">
							<h5>
								<?php echo e(__('Phone Call')); ?>:
							</h5>
							<p><?php echo e($contactInfo->content->contact_number->value); ?></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">
			<div
				class="d-flex gap-1 flex-wrap align-items-center justify-content-md-between justify-content-center">
				<p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><?php echo e(setting('copyright')); ?> <a href="<?php echo e(url('/')); ?>"><?php echo e(title(setting('site_title'))); ?></a></p>
				<ul class="d-flex align-items-center gap-4 wow fadeInDown" data-wow-delay="200ms"
				    data-wow-duration="1500ms">
					<li><a href="<?php echo e(setting('terms_condition_link')); ?>"><?php echo e(__('Terms & Conditions')); ?></a></li>
					<li><a href="<?php echo e(setting('privacy_policy_link')); ?>"><?php echo e(__('Privacy Policy')); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php endif; ?>

<?php if(setting('scroll_up')): ?>
	<div class="scroll-up">
		<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'scroll-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $attributes = $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5)): ?>
<?php $component = $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5; ?>
<?php unset($__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5); ?>
<?php endif; ?>
	</div>
<?php endif; ?>


<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/layouts/partials/_footer.blade.php ENDPATH**/ ?>
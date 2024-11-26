<section class="blog-area pt-120 pb-120">
	<div class="container">
		<div class="section-header text-center mb-60">
			<h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
				<img class="me-1" src="<?php echo e(asset($data->content->title_icon->value)); ?>" alt="icon">
				<?php echo e($data->content->sub_heading->value); ?>

			</h5>
			<h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"> <?php echo e($data->content->heading->value); ?> </h2>
		</div>
		<div class="row g-4">
		<?php $__currentLoopData = $blogs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo e($loop->iteration); ?>00ms"
			     data-wow-duration="1500ms">
				<div class="blog__item">
					<a href="<?php echo e(route('blog.details', ['slug' => $blog->slug])); ?>" class="blog__image d-block image">
						<img class="component-blog-cover" src="<?php echo e(asset($blog->cover)); ?>" alt="image">
						<div class="blog-tag">
							<h3 class="text-white"><?php echo e($blog->created_at->format('d')); ?></h3>
							<span class="text-white"><?php echo e($blog->created_at->format('M')); ?></span>
						</div>
					</a>
					<div class="blog__content">
						<ul class="blog-info pb-20 bor-bottom mb-20">
							<li>
								<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'user'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
								<span><?php echo e(__('By')); ?> <?php echo e($blog->author->first_name . ' ' . $blog->author->last_name); ?></span>
							</li>
						</ul>
						<h3><a href="<?php echo e(route('blog.details', ['slug' => $blog->slug])); ?>" class="primary-hover"><?php echo e(_tr($blog->title)); ?></a></h3>
						<a class="mt-25 read-more-btn" href="<?php echo e(route('blog.details', ['slug' => $blog->slug])); ?>"><?php echo e(__('Read More')); ?> <i
								class="fa-regular fa-arrow-right-long"></i></a>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/page/component/_blog.blade.php ENDPATH**/ ?>
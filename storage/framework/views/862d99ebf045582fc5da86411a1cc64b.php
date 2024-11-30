<?php $__env->startSection('title'); ?>
	<?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('auth_form'); ?>
	<form method="POST" action="<?php echo e(route('admin.login')); ?>" class="mt-4">
		<?php echo csrf_field(); ?>
		<div class="form-group mb-4">
			<label for="email"><?php echo e(__('Your Email')); ?></label>
			<div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'mail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                        </span>
				<input type="email" name="email" class="form-control" placeholder="Email" id="email" autofocus required>
			</div>
		</div>
		<div class="form-group">
			<div class="form-group mb-4">
				<label for="password"><?php echo e(__('Your Password')); ?></label>
				<div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'lock'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                                            </span>
					<input type="password" placeholder="Password" name="password" class="form-control" id="password" required>
				</div>
			</div>
			<div class="d-flex justify-content-between align-items-top mb-4">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="remember" id="remember">
					<label class="form-check-label mb-0" for="remember">
						<?php echo e(__('Remember me')); ?>

					</label>
				</div>
				<div><a href="<?php echo e(route('admin.password.request')); ?>" class="small text-right"><?php echo e(__('Lost password?')); ?></a></div>
			</div>
		</div>

		<?php if(config('services.recaptcha.status')): ?>
			<div class="g-recaptcha mt-4 mb-4" data-sitekey="<?php echo e(config('services.recaptcha.key')); ?>" style="width: 100%; max-width: 200px;"></div>
		<?php endif; ?>

		<div class="d-grid">
			<button type="submit" class="btn btn-gray-800"><?php echo e(__('Sign in')); ?></button>
		</div>
	</form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
	<script async src="https://www.google.com/recaptcha/api.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.auth.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/auth/login.blade.php ENDPATH**/ ?>
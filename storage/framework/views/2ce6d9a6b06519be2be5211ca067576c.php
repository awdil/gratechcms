<div class="col-12 col-xl-12">
	<div class="card">
		<div class="nav-card-header bg-light">
			👨‍🎤 <?php echo e(__('Profile information Edit')); ?>

		</div>
		<div class="card-body">
			<form method="POST" action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div class="row">
					<div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="phone"><?php echo e(__('Avatar')); ?></label>
							<?php if (isset($component)) { $__componentOriginal9f066b104e9feebb8635e3779fc3f022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f066b104e9feebb8635e3779fc3f022 = $attributes; } ?>
<?php $component = App\View\Components\ImgUp::resolve(['name' => 'avatar','old' => auth()->user()->avatar] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('img-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ImgUp::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $attributes = $__attributesOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__attributesOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f066b104e9feebb8635e3779fc3f022)): ?>
<?php $component = $__componentOriginal9f066b104e9feebb8635e3779fc3f022; ?>
<?php unset($__componentOriginal9f066b104e9feebb8635e3779fc3f022); ?>
<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<div>
							<label for="first_name"><?php echo e(__('First Name')); ?></label>
							<input class="form-control" name="first_name" value="<?php echo e(auth()->user()->first_name); ?>" id="first_name" type="text" placeholder="Enter your first name" required>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div>
							<label for="last_name"><?php echo e(__('Last Name')); ?></label>
							<input class="form-control" name="last_name" value="<?php echo e(auth()->user()->last_name); ?>" id="last_name" type="text" placeholder="Also your last name" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-3">
						<div class="form-group">
							<label for="email"><?php echo e(__('Email')); ?></label>
							<input class="form-control" name="email" value="<?php echo e(auth()->user()->email); ?>" id="email" type="email" placeholder="name@company.com" required>
						</div>
					</div>
				</div>

				<div class="mt-3">
					<button class="btn btn-gray-800 mt-2 animate-up-2" type="submit"><?php echo e(__('Update Profile')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/profile/partials/_profile_edit.blade.php ENDPATH**/ ?>
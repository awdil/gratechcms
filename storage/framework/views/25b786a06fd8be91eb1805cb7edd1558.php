<?php ($staticDefaultLang = config('app.static_default_language')); ?>
<nav>
	<div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
		<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $langName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a class="nav-item nav-link <?php echo e(is_default_lang($code,'active')); ?>" id="nav-home-tab" data-bs-toggle="tab" href="#navigation-nav-<?php echo e($code); ?>" role="tab"
			   aria-controls="nav-home" aria-selected="true"><?php echo e($langName); ?></a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</nav>
<div class="tab-content" id="nav-tabContent">
	<?php $__currentLoopData = $navigation->trans_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langName => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<div class="tab-pane fade <?php echo e(is_default_lang($langName,'show active')); ?>" id="navigation-nav-<?php echo e($langName); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
			<form method="POST"  action="<?php echo e(route('admin.navigation.site.update', $navigation->id)); ?>" enctype="multipart/form-data">
				<?php echo method_field('PUT'); ?>
				<?php echo csrf_field(); ?>
				<input type="hidden" name="lang" value="<?php echo e($langName); ?>">
				<div class="row">
					<div class="col-md-12 mb-3">
						<div>
							<label for="navigation_name"><?php echo e(__('Navigation Name')); ?></label>
							<input class="form-control" name="navigation_name" id="navigation_name" value="<?php echo e($value->name); ?>" type="text" placeholder="Enter Navigation name">
						</div>
					</div>
				</div>
				<?php if($langName == $staticDefaultLang): ?>
					<div class="row ">
						<div class="col-md-12 mb-3">
							<div>
								<label for="navigation-display"><?php echo e(__('Navigation Display')); ?></label>
								<select class="form-select" name="navigation_display" id="navigation-display" aria-label="Default select example">
									<?php $__currentLoopData = \App\Constants\Navigation::DISPLAY; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($display); ?>" <?php if($display == $navigation->display): echo 'selected'; endif; ?>><?php echo e(ucwords($display)); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div>
								<label for="target-link"><?php echo e(__('Target Link')); ?></label>
								<select class="form-select" name="target_link" id="target-link" aria-label="Default select example">
									<?php $__currentLoopData = \App\Constants\Navigation::TARGET; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $target): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($target); ?>" <?php if($target == $navigation->target): echo 'selected'; endif; ?>><?php echo e($name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="page-list" <?php if($navigation->page_id == null): ?> hidden <?php endif; ?>>
								<label for="page-list"><?php echo e(__('Page Select')); ?></label>
								<select class="form-select" name="page_id" id="page-list" aria-label="Default select example">
									<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option <?php if($page->id == $navigation->page_id): echo 'selected'; endif; ?> value="<?php echo e($page->id); ?>"><?php echo e($page->title); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
							<div class="custom-url-input" <?php if($navigation->page_id != null): ?> hidden <?php endif; ?>>
								<label for="custom-url"><?php echo e(__('Custom Url')); ?></label>
								<input class="form-control" name="custom_url" value="<?php echo e($navigation->slug); ?>" id="custom-url" type="text" placeholder="Enter Custom Url">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3 mt-2">
							<div>
								<div class="form-check form-switch">
									<label class="form-check-label" for="is-custom-url"><?php echo e(__('Custom Url')); ?></label>
									<input class="form-check-input is-custom-url" type="checkbox" <?php if($navigation->page_id == null): echo 'checked'; endif; ?> value="active" name="is_custom_url" id="is-custom-url">
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3 mt-2">
							<div>
								<div class="form-check form-switch">
									<label class="form-check-label" for="nav-status"><?php echo e(__('Navigation Status')); ?></label>
									<input class="form-check-input" type="checkbox" <?php if($navigation->is_active): echo 'checked'; endif; ?> value="1" name="status" id="nav-status">
								</div>
							</div>
						</div>

					</div>
				<?php endif; ?>
				<div class="mt-3">
					<button class="btn btn-info mt-2 animate-up-2" type="submit"> <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Update Now')); ?></button>
				</div>
			</form>

		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/navigation/partial/_edit_append.blade.php ENDPATH**/ ?>
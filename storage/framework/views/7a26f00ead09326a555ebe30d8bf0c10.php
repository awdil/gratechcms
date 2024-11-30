<?php $__env->startSection('title'); ?>
	<?php echo e(__(ucwords($type).' '.'Navigation')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__(ucwords($type).' '.'Navigation')); ?></h1>
			</div>
			<div class="btn-toolbar  mb-md-0 mb-2 ">
				<a href="<?php echo e(route('admin.navigation.site.index')); ?>" type="button" class="btn btn-sm btn-info d-inline-flex align-items-center">
					<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'clipboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
					<?php echo e(__('Navigation Manage')); ?>

				</a>
			</div>
		</div>
	</div>
	<div class="card border-0 shadow mb-4">
		<div class="table-responsive rounded">
			<form method="POST" action="<?php echo e(route('admin.navigation.position-update')); ?>">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="type" value="<?php echo e($type); ?>">

				<table class="table table-bordered table-striped mb-0">
					<thead class="table-light">
					<tr>
						<th class="border-bottom"><?php echo e(__('Drag Navigation')); ?></th>
						<th class="border-bottom"><?php echo e(__('Name')); ?></th>
						<th class="border-bottom"><?php echo e(__('Slug')); ?></th>
						<th class="border-bottom"><?php echo e(__('Status')); ?></th>
						<th class="border-bottom"><?php echo e(__('Action')); ?></th>
					</tr>
					</thead>
					<tbody id="navigation-drag">
					<?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="navigation-item" draggable="true">
							<input type="hidden" name="navigation_ids[]" value="<?php echo e($navigation->id); ?>">
							<td>
								<?php if (isset($component)) { $__componentOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bfb1fa99a7d89eae1cf7ba1287cdfc5 = $attributes; } ?>
<?php $component = App\View\Components\Svg::resolve(['i' => 'uil-drag','class' => 'drag-handle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
							</td>
							<td class="fw-bold align-middle"><?php echo e(_tr($navigation->name)); ?></td>
							<td class="fw-bold align-middle"><?php echo e($navigation->slug); ?></td>
							<td class="align-middle">
							<span class="badge bg-<?php echo e($navigation->is_active ? 'success' : 'danger'); ?>">
								<?php echo e($navigation->is_active ? 'Active' : 'Inactive'); ?>

							</span>
							</td>


							<td class="align-middle text-center">
								<a href="javascript:void(0)" data-url="<?php echo e(route('admin.navigation.position-remove',['id' => $navigation->id,'type' => $type])); ?>" class="btn btn-sm btn-danger  delete">
									<?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'delete-3','height' => '20']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'delete-3','height' => '20']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?><?php echo e(__('Delete')); ?>

								</a>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>

				<?php if($navigations->count() == 0): ?>
					<h4 class="text-center text-muted py-3"><?php echo e(__('No Data Available')); ?></h4>
				<?php else: ?>
					<div class="m-3 text-end">
						<button class="btn btn-info mt-2" type="submit"> <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
				<?php endif; ?>
			</form>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
        $(document).ready(function () {
            'use strict';

            const navigationDrag = document.getElementById('navigation-drag');
            new Sortable(navigationDrag, {
                animation: 150,
                group: 'shared',
                ghostClass: 'blue-background-class'
            });
        });
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/navigation/type.blade.php ENDPATH**/ ?>
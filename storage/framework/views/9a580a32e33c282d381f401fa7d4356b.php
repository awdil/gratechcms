
<?php $__env->startSection('title'); ?>
	<?php echo e(__('App Info')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="py-4">
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4"><?php echo e(__('App Info')); ?></h1>
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-xl-12">
			<div class="card card-body border-0 shadow mb-4">
				
				<div class="table-responsive">
					<table class="table table-centered table-nowrap mb-0 rounded">
						<tbody>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="border-0 fw-bold"><img class="image-xs " src="<?php echo e(asset('general/static/tech/'.str_replace('_version','',$name).'.png')); ?>" alt=""> <span
										class="mx-2"></span> <?php echo e(ucwords( str_replace('_',' ',$name))); ?></td>
								<td class="border-0 text-success">
									<div class="d-flex align-items-center">
										<span class="fw-bold"><?php echo e($value); ?></span></div>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/app/info.blade.php ENDPATH**/ ?>

<?php $__env->startSection('content'); ?>
	<main>
		<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
			<div class="container">
				<h1 class="d-flex align-items-center justify-content-center mb-4 h3"><?php echo $__env->yieldContent('title'); ?></h1>
				<div class="row justify-content-center form-bg-image" data-background-lg="<?php echo e(asset(setting('login_bg'))); ?>">
					<div class="col-12 d-flex align-items-center justify-content-center">
						<div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
							<div class="text-center text-md-center mb-4 mt-md-0">
								<a href="/">
									<img height="40" src="<?php echo e(asset(setting('dark_logo'))); ?>" alt="">
								</a>
							</div>
							
							<?php if($errors->any()): ?>
								<div class="alert alert-warning alert-dismissible fade show" role="alert">
									<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<strong><?php echo e($error); ?></strong>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
									        aria-label="Close"></button>
								</div>
							<?php endif; ?>
							<?php if(session('status')): ?>
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong><?php echo e(session('status')); ?></strong>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
									        aria-label="Close"></button>
								</div>
							<?php endif; ?>
							
							
							<?php echo $__env->yieldContent('auth_form'); ?>
						
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/auth/index.blade.php ENDPATH**/ ?>
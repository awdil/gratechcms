<?php $__env->startSection('title', __('My Profile')); ?><?php $__env->startSection('user-setting-content'); ?>    <form action="<?php echo e(route('user.profile.update-password')); ?>" method="post" enctype="multipart/form-data">        <?php echo csrf_field(); ?>        <div class="card-body">            <h2 class="mb-4">🔑 <?php echo e(__('Update Password')); ?></h2>            <div class="mb-3">                <label class="form-label" for="old-password"><?php echo e(__('Current Password')); ?></label>                <input type="password" name="old_password" id="old-password" class="form-control" placeholder="<?php echo e(__('Current Password')); ?>" required>            </div>            <div class="mb-3">                <label class="form-label" for="password"><?php echo e(__('New Password')); ?></label>                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo e(__('New Password')); ?>" required>            </div>            <div class="mb-3">                <label class="form-label" for="password_confirmation"><?php echo e(__('Confirm New Password')); ?></label>                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="<?php echo e(__('Confirm New Password')); ?>" required>            </div>        </div>        <div class="card-footer bg-transparent mt-auto">            <div class="btn-list justify-content-end">                <button type="submit" class="btn btn-primary">                    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'check','height' => '20','class' => 'me-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'check','height' => '20','class' => 'me-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?> <?php echo e(__('Update Password')); ?>                </button>            </div>        </div>    </form><?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.setting.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/frontend/user/setting/change_password.blade.php ENDPATH**/ ?>
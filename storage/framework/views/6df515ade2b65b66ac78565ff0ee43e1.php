<?php $__env->startSection('setting_title', __('Plugins Manage')); ?>
<?php $__env->startSection('setting_content'); ?>

    <div class="table-responsive  rounded">
        <table class="table table-striped mb-0">
            <thead class="table-light">
            <tr>
                <th scope="col"><?php echo e(__('Name | Info')); ?></th>
                <th scope="col"><?php echo e(__('Status')); ?></th>
                <th scope="col"><?php echo e(__('Manage')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $plugins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img class="avatar-img me-3" src="<?php echo e(asset($plugin->logo)); ?>" alt="<?php echo e($plugin->name); ?>" height="30">
                            <div>
                                <div class="fw-bold"><?php echo e($plugin->name); ?></div>
                                <div class="small text-muted"><?php echo e($plugin->description); ?></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge p-2 <?php echo e($plugin->status ? 'bg-success' : 'bg-danger'); ?>">
                            <?php echo e($plugin->status ? __('ACTIVATED') : __('DEACTIVATED')); ?>

                        </span>

                    </td>
                    <td>
                        <button type="button" class="btn btn-info btn-sm d-flex align-items-center edit-modal"
                                data-edit-url="<?php echo e(route('admin.settings.plugin.edit',$plugin->id)); ?>">
                            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'manage','height' => '18','class' => 'me-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'manage','height' => '18','class' => 'me-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
                            <?php echo e(__('Manage')); ?>

                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    
    <?php echo $__env->make('backend.settings.plugin.partials._manage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            editFormByModal('manageModal', 'edit-append', false, true);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.settings.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/backend/settings/plugin/index.blade.php ENDPATH**/ ?>
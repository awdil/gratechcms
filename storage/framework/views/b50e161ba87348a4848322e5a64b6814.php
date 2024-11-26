<?php $__env->startSection('title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="py-2">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4"><?php echo e(__('Dashboard')); ?></h1>
            </div>
        </div>
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('statistics_card')): ?>
        <?php echo $__env->make('backend.dashboard.partial._statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>


    <div class="row mt-3">
        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_chart')): ?>
            <?php echo $__env->make('backend.dashboard.partial._transaction_chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('top_services_chart')): ?>
             <?php echo $__env->make('backend.dashboard.partial._top_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>

    <div class="row mt-3">
        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('latest_user')): ?>
             <?php echo $__env->make('backend.dashboard.partial._latest_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('latest_order_chart')): ?>
              <?php echo $__env->make('backend.dashboard.partial._latest_order_chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/dashboard/index.blade.php ENDPATH**/ ?>
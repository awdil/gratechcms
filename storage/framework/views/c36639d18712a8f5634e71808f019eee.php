<script src="<?php echo e(asset('general/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/summernote-lite.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/smooth-scroll.polyfills.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/tagify.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/simple-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/sortable.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/app.js')); ?>"></script>

<script src="<?php echo e(asset('general/js/apexcharts.min.js')); ?>" defer></script>
<script src="<?php echo e(asset('general/js/moment.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/daterangepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/datepicker.min.js')); ?>"></script>

<script src="<?php echo e(asset('backend/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('general/js/helpers.js')); ?>"></script>
<?php echo $__env->make('general.notification-config._pusher_config', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('script'); ?>
<?php echo $__env->yieldContent('script'); ?>
<?php echo $__env->make('general._notify_evs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('general._date_range_picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/apple/Documents/gratech/resources/views/backend/layouts/partials/_script.blade.php ENDPATH**/ ?>
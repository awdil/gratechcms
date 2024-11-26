<?php if(session('notifyevs')): ?>
	<script>
        (function () {
            'use strict';
            const notifyData = JSON.parse(`<?php echo e(json_encode(session('notifyevs'))); ?>`.replace(/&quot;/g, '"'));
            notifyEvs(notifyData.type, notifyData.message);
        })();
	</script>
<?php endif; ?>

<?php /**PATH /Users/apple/Documents/gratech/resources/views/general/_notify_evs.blade.php ENDPATH**/ ?>
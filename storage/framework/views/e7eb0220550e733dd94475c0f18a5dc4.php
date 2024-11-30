<?php if(setting('img_error')): ?>
	<script>
        'use strict';
	        $('img').on('error', function() {
	            // Hide the image
	            $(this).hide();
	        });
	</script>
<?php endif; ?>
<?php if(setting('site_animation')): ?>
	<script>
        'use strict';
        // WOW Animatin area start here ***
        new WOW().init();
        // WOW Animatin area start here ***
	</script>
<?php endif; ?>

<?php if(setting('cookie_status')): ?>
<script>
	'use strict';
    // Cache jQuery objects
    const $cookiesBox = $('.cookies-wrapper');
    const $buttons = $('.button');

    // Show cookies box
    const executeCodes = () => {
        if (document.cookie.indexOf('<?php echo e(setting('site_title')); ?>') === -1) {
            $cookiesBox.addClass('show');
        }
    };

    // Handle button clicks using event delegation
    $cookiesBox.on('click', '.button', function() {
        const $button = $(this);
        $cookiesBox.removeClass('show');

        // Set cookie if accept button is clicked
        if ($button.attr('id') === 'acceptBtn') {
            const expiryDate = new Date(Date.now() + 30 * 24 * 60 * 60 * 1000);
            document.cookie = `cookieBy=<?php echo e(setting('site_title')); ?>; expires=${expiryDate.toUTCString()};`;
        }
    });

    // Execute code on window load
    $(window).on('load', executeCodes);

</script>
<?php endif; ?><?php /**PATH /Users/apple/Documents/gratechcms/resources/views/frontend/partials/_helper.blade.php ENDPATH**/ ?>
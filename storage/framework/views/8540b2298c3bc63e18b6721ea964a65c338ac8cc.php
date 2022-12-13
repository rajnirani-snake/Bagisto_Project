
<!-- <link rel="preload" href="<?php echo e(asset('themes/velocity/assets/fonts/font-rango/rango.ttf') . '?o0evyv'); ?>" as="font" crossorigin="anonymous" /> -->


<!-- <link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/bootstrap.min.css')); ?>" /> -->


<?php if(
    core()->getCurrentLocale()
    && core()->getCurrentLocale()->direction === 'rtl'
): ?>
    <!-- <link href="<?php echo e(asset('themes/velocity/assets/css/bootstrap-flipped.css')); ?>" rel="stylesheet"> -->
<?php endif; ?>


<!-- <link rel="stylesheet" href="<?php echo e(asset(mix('/css/velocity.css', 'themes/velocity/assets'))); ?>" /> -->


<?php echo $__env->yieldPushContent('css'); ?>


<style>
    /* <?php echo core()->getConfigData('general.content.custom_scripts.custom_css'); ?> */
</style>


<link rel="icon" href="./favicon.ico" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<link href="<?php echo e(url(./assets/css/app.css)); ?>" rel="stylesheet">
<link href="<?php echo e(url(./assets/icons/material-icons.css)); ?>" rel="stylesheet">
<link href="<?php echo e(url(./assets/css/bootstrap-select.min.css)); ?>" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="<?php echo e(url(./assets/css/bootstrap-select.min.css)); ?>" rel="stylesheet"></noscript>
<link href="<?php echo e(url(./assets/css/jquery.fancybox.min.css)); ?>" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="<?php echo e(url(./assets/css/jquery.fancybox.min.css)); ?>" rel="stylesheet"></noscript>
<link href="<?php echo e(url(./assets/css/daterangepicker.css)); ?>" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="<?php echo e(url(./assets/css/daterangepicker.css)); ?>" rel="stylesheet"></noscript>
<link href="<?php echo e(url(./assets/css/swiper-bundle.min.css)); ?>" rel="stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="<?php echo e(url(./assets/css/swiper-bundle.min.css)); ?>" rel="stylesheet"></noscript>




<?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/resources/themes/velocity/views/layouts/styles.blade.php ENDPATH**/ ?>
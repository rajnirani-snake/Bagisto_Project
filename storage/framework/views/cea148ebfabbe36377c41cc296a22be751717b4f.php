<nav class="row" id="top">
    <div class="col-sm-6">
        <?php echo $__env->make('velocity::layouts.top-nav.locale-currency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-sm-6">
        <?php echo $__env->make('velocity::layouts.top-nav.login-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</nav><?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/resources/themes/velocity/views/layouts/top-nav/index.blade.php ENDPATH**/ ?>
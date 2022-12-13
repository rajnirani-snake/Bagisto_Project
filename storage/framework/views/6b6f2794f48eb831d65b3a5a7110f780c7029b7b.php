<?php
    $showWishlist = core()->getConfigData('general.content.shop.wishlist_option') == "1" ? true : false;
?>

<?php if($showWishlist): ?>

    <wishlist-component-with-badge
        is-customer="<?php echo e(auth()->guard('customer')->check() ? 'true' : 'false'); ?>"
        is-text="<?php echo e(isset($isText) && $isText ? 'true' : 'false'); ?>"
        src="<?php echo e(route('customer.wishlist.index')); ?>">
    </wishlist-component-with-badge>

<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/packages/Webkul/Velocity/src/resources/views/shop/layouts/particals/wishlist.blade.php ENDPATH**/ ?>
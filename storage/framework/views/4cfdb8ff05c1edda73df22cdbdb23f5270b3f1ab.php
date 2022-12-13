<?php
    $isRendered = false;
    $advertisementThree = null;
    $isLazyLoad = ! isset($lazyload) ? true : ( $lazyload ? true : false );
?>

<?php if(
    $velocityMetaData
    && $velocityMetaData->advertisement
): ?>
    <?php
        $advertisement = json_decode($velocityMetaData->advertisement, true);

        if (isset($advertisement[3]) && is_array($advertisement[3])) {
            $advertisementThree = array_values(array_filter($advertisement[3]));
        }
    ?>

    <?php if($advertisementThree): ?>
        <?php
            $isRendered = true;
        ?>

        <div class="container-fluid advertisement-three-container">
            <div class="row">
                <?php if( isset($advertisementThree[0])): ?>
                    <a <?php if(isset($one)): ?> href="<?php echo e($one); ?>" <?php endif; ?> class="col-lg-6 col-md-12 no-padding">
                        <img
                            class="full-width <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                            <?php if(! $isLazyLoad): ?> src="<?php echo e(Storage::url($advertisementThree[0])); ?>" <?php endif; ?>
                            data-src="<?php echo e(Storage::url($advertisementThree[0])); ?>" alt="" />
                    </a>
                <?php endif; ?>

                <div class="col-lg-6 col-md-12 second-panel">
                    <?php if( isset($advertisementThree[1])): ?>
                        <a <?php if(isset($two)): ?> href="<?php echo e($two); ?>" <?php endif; ?> class="row top-container">
                            <img
                                class="col-12 pr0 <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                                <?php if(! $isLazyLoad): ?> src="<?php echo e(Storage::url($advertisementThree[1])); ?>" <?php endif; ?>
                                data-src="<?php echo e(Storage::url($advertisementThree[1])); ?>" alt="" />
                        </a>
                    <?php endif; ?>
                    <?php if( isset($advertisementThree[2])): ?>
                        <a <?php if(isset($three)): ?> href="<?php echo e($three); ?>" <?php endif; ?> class="row bottom-container">
                            <img
                                class="col-12 pr0 <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                                <?php if(! $isLazyLoad): ?> src="<?php echo e(Storage::url($advertisementThree[2])); ?>" <?php endif; ?>
                                data-src="<?php echo e(Storage::url($advertisementThree[2])); ?>" alt="" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if(! $isRendered): ?>
    <div class="container-fluid advertisement-three-container">
        <div class="row">
            <a <?php if(isset($one)): ?> href="<?php echo e($one); ?>" <?php endif; ?> class="col-lg-6 col-md-12 no-padding">
                <img
                    class="full-width <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                    <?php if(! $isLazyLoad): ?> src="<?php echo e(asset('/themes/velocity/assets/images/headphones.webp')); ?>" <?php endif; ?>
                    data-src="<?php echo e(asset('/themes/velocity/assets/images/headphones.webp')); ?>" alt="" />
            </a>

            <div class="col-lg-6 col-md-12 second-panel">
                <a <?php if(isset($two)): ?> href="<?php echo e($two); ?>" <?php endif; ?> class="row top-container">
                    <img
                        class="col-12 pr0 <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                        <?php if(! $isLazyLoad): ?> src="<?php echo e(asset('/themes/velocity/assets/images/watch.webp')); ?>" <?php endif; ?>
                        data-src="<?php echo e(asset('/themes/velocity/assets/images/watch.webp')); ?>" alt="" />
                </a>
                <a <?php if(isset($three)): ?> href="<?php echo e($three); ?>" <?php endif; ?> class="row bottom-container">
                    <img
                        class="col-12 pr0 <?php echo e($isLazyLoad ? 'lazyload' : ''); ?>"
                        <?php if(! $isLazyLoad): ?> src="<?php echo e(asset('/themes/velocity/assets/images/kids-2.webp')); ?>" <?php endif; ?>
                        data-src="<?php echo e(asset('/themes/velocity/assets/images/kids-2.webp')); ?>" alt="" />
                </a>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/resources/themes/velocity/views/home/advertisements/advertisement-three.blade.php ENDPATH**/ ?>
<!-- <!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <head>
        
        <title><?php echo $__env->yieldContent('page_title'); ?></title>

        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="content-language" content="<?php echo e(app()->getLocale()); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="base-url" content="<?php echo e(url()->to('/')); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php echo view_render_event('bagisto.shop.layout.head'); ?>


        
        <?php echo $__env->yieldContent('head'); ?>

        
        <?php echo $__env->yieldContent('seo'); ?>

        
        <?php if($favicon = core()->getCurrentChannel()->favicon_url): ?>
            <link rel="icon" sizes="16x16" href="<?php echo e($favicon); ?>" />
        <?php else: ?>
            <link rel="icon" sizes="16x16" href="<?php echo e(asset('/themes/velocity/assets/images/static/v-icon.png')); ?>" />
        <?php endif; ?>

        
        <?php echo $__env->make('shop::layouts.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body <?php if(core()->getCurrentLocale() && core()->getCurrentLocale()->direction === 'rtl'): ?> class="rtl" <?php endif; ?>>
        <?php echo view_render_event('bagisto.shop.layout.body.before'); ?>


        
        <div id="app">
            <product-quick-view v-if="$root.quickView"></product-quick-view>

            <div class="main-container-wrapper">

                <?php $__env->startSection('body-header'); ?>
                    
                    <?php echo $__env->make('shop::layouts.top-nav.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo view_render_event('bagisto.shop.layout.header.before'); ?>


                        
                        <?php echo $__env->make('shop::layouts.header.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo view_render_event('bagisto.shop.layout.header.after'); ?>


                    <div class="main-content-wrapper col-12 no-padding">

                        
                        <header class="row velocity-divide-page vc-header header-shadow active">

                            
                            <div class="vc-small-screen container">
                                <?php echo $__env->make('shop::layouts.header.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            
                            <?php echo $__env->make('shop::layouts.header.desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </header>

                        <div class="">
                            <div class="row col-12 remove-padding-margin">
                                <sidebar-component
                                    main-sidebar=true
                                    id="sidebar-level-0"
                                    url="<?php echo e(url()->to('/')); ?>"
                                    category-count="<?php echo e($velocityMetaData ? $velocityMetaData->sidebar_category_count : 10); ?>"
                                    add-class="category-list-container pt10">
                                </sidebar-component>

                                <div class="col-12 no-padding content" id="home-right-bar-container">
                                    <div class="container-right row no-margin col-12 no-padding">
                                        <?php echo view_render_event('bagisto.shop.layout.content.before'); ?>


                                            <?php echo $__env->yieldContent('content-wrapper'); ?>

                                        <?php echo view_render_event('bagisto.shop.layout.content.after'); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo $__env->yieldSection(); ?>

                <div class="container">
                    <?php echo view_render_event('bagisto.shop.layout.full-content.before'); ?>


                        <?php echo $__env->yieldContent('full-content-wrapper'); ?>

                    <?php echo view_render_event('bagisto.shop.layout.full-content.after'); ?>

                </div>
            </div>

            
            <velocity-overlay-loader></velocity-overlay-loader>

            <go-top bg-color="#26A37C"></go-top>
        </div>

        
        <?php $__env->startSection('footer'); ?>
            <?php echo view_render_event('bagisto.shop.layout.footer.before'); ?>


                <?php echo $__env->make('shop::layouts.footer.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo view_render_event('bagisto.shop.layout.footer.after'); ?>

        <?php echo $__env->yieldSection(); ?>

        <?php echo view_render_event('bagisto.shop.layout.body.after'); ?>


        
        <div id="alert-container"></div>

        
        <?php echo $__env->make('shop::layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html> -->
<?php /**PATH /Applications/MAMP/htdocs/bagisto-bagisto-ac6a4be/resources/themes/velocity/views/layouts/master.blade.php ENDPATH**/ ?>
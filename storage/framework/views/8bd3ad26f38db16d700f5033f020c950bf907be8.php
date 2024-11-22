
<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <section class="bravo_search_car pt-40 pb-40 bg-light-2 <?php if($layout == 'grid'): ?> d-none <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="text-30 fw-600"><?php echo e(setting_item_with_lang("car_page_search_title")); ?></h1>
                    </div>
                    <div class="bg-white rounded-4 mt-30">
                        <?php echo $__env->make('Car::frontend.layouts.search.form-search', ['style' => 'default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('Car::frontend.layouts.search.list-item', ['style_layout' => $layout], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript" src="<?php echo e(asset('module/car/js/car.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project\themes/GoTrip/Car/Views/frontend/search.blade.php ENDPATH**/ ?>
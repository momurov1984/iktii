<?php $__env->startSection('title'); ?>
    <?php echo e($chart->name); ?>: <?php echo e($chartMaterial->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="course page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($chart->name); ?>: <?php echo e($chartMaterial->name); ?></h1>
                <h2 class="category page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title"><?php echo e($chart->name); ?>: <?php echo e($chartMaterial->name); ?></h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                    
                    <?php $__currentLoopData = $chartMaterial->chartMaterial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured-course-item w-col w-col-6 w-dyn-item">
                        <div class="course-block-wrapper">
                            <a class="large w-block" target="_blanck" href='<?php echo e(url("files/storage/app/{$ch->pdf}")); ?>'>
                                <iframe src='<?php echo e(url("files/storage/app/{$ch->pdf}")); ?>' width="100%"></iframe>
                            </a>
                            <div class="course-content-block">
                                <a class="course-title-link with-summary" href='<?php echo e(url("files/storage/app/{$ch->pdf}")); ?>' target="_blanck">
                                    Группа: <?php echo e($ch->name); ?>

                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/pages/departments/chartMaterial.blade.php ENDPATH**/ ?>
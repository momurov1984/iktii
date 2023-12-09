<?php $__env->startSection('title'); ?>
    <?php echo e($chart->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($chart->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Расписание</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list-wrapper w-dyn-list">
                    <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                        <?php $__currentLoopData = $chart->chartContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-6 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                        <a class="course-title-link with-summary"><?php echo e($cc->name); ?></a>
                                        <?php $__currentLoopData = $cc->chartMaterial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="w-col w-col-6">
                                                <a class="course-title-link">Группа: <?php echo e($cm->name); ?></a>
                                                <a href='<?php echo e(url("files/storage/app/{$cm->pdf}")); ?>' target="_blank" class="pdf-d-s">Скачать</a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/pages/departments/chart.blade.php ENDPATH**/ ?>
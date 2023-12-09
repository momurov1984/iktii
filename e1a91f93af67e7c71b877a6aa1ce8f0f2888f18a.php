<?php $__env->startSection('title'); ?>
    Руководство
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load">Руководство</h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">Кафедра ФИИТ, КНУ имени Жусупа Баласагына&nbsp;</h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Руководство</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-12 w-dyn-item">
                            <div class="course-block-wrapper">
                                <div class="course-content-block flex-department-single">
                                    <div class="w-col-4">
                                        <img src='<?php echo e(asset("files/storage/app/{$t->image}")); ?>' class="img-department-single">
                                    </div>
                                    <div class="w-col-8">
                                        <a class="course-title-link with-summary"><?php echo e($t->name); ?></a>
                                        <a class="course-title-link">Должность: <?php echo e($t->status); ?></a>
                                        <br>
                                        <a href='<?php echo e(url("files/storage/app/{$t->pdf}")); ?>' target="_blank" class="pdf-d-s">Резюме</a>
                                        <br>
                                        <div class="block-body-d-s">
                                            <?php echo htmlspecialchars_decode($t->body); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/pages/departments/guide.blade.php ENDPATH**/ ?>
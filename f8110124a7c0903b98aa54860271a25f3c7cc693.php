<?php $__env->startSection('title'); ?>
    <?php echo e($photoCategory->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($photoCategory->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title"><?php echo e($photoCategory->name); ?></h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">

                    <?php $__currentLoopData = $photoCategory->photoSubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="featured-course-item w-col w-col-12 w-dyn-item photo-block-single">
                        <div class="course-block-wrapper">
                            <div class="course-content-block">
                                <a class="course-title-link with-summary"><?php echo e($ps->name); ?></a>
                                <br>
                                <div class="featured-course-item w-col w-col-5 w-dyn-item photo-s-block">
                                    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true">
                                        <?php $__currentLoopData = $ps->photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src='<?php echo e(asset("files/storage/app/{$img->uploads}")); ?>' class="img-fluid">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="featured-course-item w-col w-col-7 w-dyn-item photo-s-block">
                                    <?php echo htmlspecialchars_decode($ps->body); ?>

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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS-Panel\domains\Ikt\files\resources\views/pages/photos/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e($subMenu->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($subMenu->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ КНУ имени Жусупа Баласагына</h2>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container w-container">
            <div class="w-row">
                <div class="about-us-col-left w-col w-col-12">
                    <div class="section-title-wrapper">
                        <h2 class="section-title"><?php echo e($subMenu->name); ?></h2>
                        <div class="section-title-divider"></div>
                    </div>
                </div>
                <?php if($subMenu->image): ?>
                <div class="about-us-column-right w-col w-col-12">
                    <div class="about-us-image-block" style="background-image: url('/files/storage/app/<?php echo e($subMenu->image); ?>');"></div>
                    <br>
                </div>
                <?php endif; ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="container w-container">
                    <?php echo htmlspecialchars_decode($subMenu->body); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/pages/departments/subMenu.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($category->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">Кафедра ФИИТ, КНУ имени Жусупа Баласагына&nbsp;</h2>
            </div>
        </div>
    </div>

    <div class="section stats tint">
        <div class="container w-container">
            <div class="hero-overlay-row w-row">
                <?php $__currentLoopData = $category->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="last stats-column w-col w-col-4" style="margin-bottom: 15px">
                        <a class="hero-overlay-block w-inline-block" href="<?php echo e(route('pages.subCategory', [$category->slug, $cs->id])); ?>">
                            <div class="hero-overlay-block-title"><?php echo e($cs->name); ?></div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/pages/categories/show.blade.php ENDPATH**/ ?>
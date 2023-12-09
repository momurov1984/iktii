<?php $__env->startSection('title'); ?>
    Кафедры
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="course page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load">Кафедры</h1>
                <h2 class="category page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Все кафедры</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="w-dyn-list">
                <div class="w-clearfix w-dyn-items w-row">
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-3 w-dyn-item">
                            <div class="course-block-wrapper home-featured">
                                <a class="course-image-link-block home-featured w-inline-block" href="<?php echo e(route('pages.department.show', $d->slug)); ?>" style="background-image: url('/files/storage/app/<?php echo e($d->image); ?>');"></a>
                                <div class="course-content-block">
                                    <a class="course-title-link" href="<?php echo e(route('pages.department.show', $d->slug)); ?>"><?php echo e($d->name); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/pages/departments/department.blade.php ENDPATH**/ ?>
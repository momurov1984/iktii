<?php $__env->startSection('title'); ?>
    Все новости КНУ и ФИИТ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load">Новости</h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">КНУ и ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Выберите раздел</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">

                    <div class="featured-course-item w-col w-col-6 w-dyn-item">
                        <div class="course-block-wrapper">
                            <a class="course-image-link-block large w-inline-block" href="<?php echo e(route('pages.blog.knu')); ?>" style="background-image: url('/images/bg/bg-knu2.jpg');">
                            </a>
                            <div class="course-content-block">
                                <a class="course-title-link with-summary" href="<?php echo e(route('pages.blog.knu')); ?>">Все новости КНУ</a>
                                <p class="course-summary">Выберите этот раздел, для того чтобы посмотреть последние новости КНУ</p>
                            </div>
                        </div>
                    </div>
                    <div class="featured-course-item w-col w-col-6 w-dyn-item">
                        <div class="course-block-wrapper">
                            <a class="course-image-link-block large w-inline-block" href="<?php echo e(route('pages.blog.fiit')); ?>" style="background-image: url('/images/bg/bg-knu1.jpg');">
                            </a>
                            <div class="course-content-block">
                                <a class="course-title-link with-summary" href="<?php echo e(route('pages.blog.fiit')); ?>">Все новости ФИИТ</a>
                                <p class="course-summary">Выберите этот раздел, для того чтобы посмотреть последние новости ФИИТ</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/pages/blogs/index.blade.php ENDPATH**/ ?>
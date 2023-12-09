<?php $__env->startSection('title'); ?>
    Последние новости ФИИТ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load">Новости</h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Последние новости ФИИТ</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                    <?php $__currentLoopData = $fiitBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-6 w-dyn-item">
                            <div class="course-block-wrapper">
                                <a class="course-image-link-block large w-inline-block" href="<?php echo e(route('pages.blog.fiit.show', $b->slug)); ?>" style="background-image: url('/files/storage/app/<?php echo e($b->image); ?>');">
                                </a>
                                <div class="course-content-block">
                                    <a class="course-title-link with-summary" href="<?php echo e(route('pages.blog.fiit.show', $b->slug)); ?>">
                                        <?php echo e($b->name); ?>

                                    </a>
                                    <?php echo htmlspecialchars_decode(str_limit($b->body, 150)); ?>

                                </div>
                                <div class="_2 course-content-block">
                                    <div class="course-info-icon"></div>
                                    <div class="course-info-title"><?php echo e($b->created_at->format('d.m.Y')); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/pages/blogs/fiit.blade.php ENDPATH**/ ?>
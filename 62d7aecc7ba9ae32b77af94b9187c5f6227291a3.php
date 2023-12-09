<?php $__env->startSection('title'); ?>
    <?php echo e($fiitBlog->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="blog-post">
        <div class="blog-post page-header-overlay">
            <div class="container w-container">
                <div class="blog-title-wrapper">
                    <h1 class="blog-post-title page-header-title" data-ix="fade-in-on-load">
                        <?php echo e($fiitBlog->name); ?>

                    </h1>
                    <div class="blog-post-header-info-block">
                        <div class="course-category-title icon" data-ix="fade-in-on-load-2"></div>
                        <div class="blog-post-date-title" data-ix="fade-in-on-load-2"><?php echo e($fiitBlog->created_at->format('d.m.Y')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section tint">
        <div class="container w-container">
            <div class="blog-post-wrapper">
                <div class="blog-post-content-wrapper first">
                    <div class="blog-post-content w-richtext">
                        <h4 class="title-single-blog"><?php echo e($fiitBlog->name); ?></h4>
                        <div>
                            <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true">
                                <img src='<?php echo e(asset("files/storage/app/{$fiitBlog->image}")); ?>' class="img-single-blog">
                                <?php $__currentLoopData = $fiitBlog->fiitUpload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src='<?php echo e(asset("files/storage/app/{$img->uploads}")); ?>' class="img-fluid">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <?php echo htmlspecialchars_decode($fiitBlog->body); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/pages/blogs/showFiit.blade.php ENDPATH**/ ?>
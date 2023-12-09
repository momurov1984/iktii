<?php $__env->startSection('title'); ?>
    Инструкции
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load">Инструкции</h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Все инструкции</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                    <?php $__currentLoopData = $instructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-6 w-dyn-item">
                            <div class="course-block-wrapper">
                                <a class="course-image-link-block large w-inline-block is-video-block">
                                    <?php if($i->video): ?>
                                        <iframe width="100%" height="100%" src='<?php echo e(asset("files/storage/app/{$i->video}")); ?>'></iframe>
                                    <?php endif; ?>
                                    <?php if($i->url): ?>
                                        <iframe width="100%" height="100%" src="<?php echo e($i->url); ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <?php endif; ?>
                                </a>
                                <div class="course-content-block">
                                    <?php if($i->video): ?>
                                        <a class="course-title-link with-summary" href='<?php echo e(url("files/storage/app/{$i->video}")); ?>' target="_blanck"><?php echo e($i->name); ?></a>
                                    <?php endif; ?>
                                    <?php if($i->url): ?>
                                        <a class="course-title-link with-summary" href="<?php echo e($i->url); ?>" target="_blanck"><?php echo e($i->name); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/pages/departments/instruction.blade.php ENDPATH**/ ?>
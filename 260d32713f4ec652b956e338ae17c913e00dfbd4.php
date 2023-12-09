<?php $__env->startSection('title'); ?>
    <?php echo e($student->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="featured-courses page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($student->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">ФИИТ</h2>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="featured-courses-list-wrapper w-dyn-list">
                <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                    <?php if($student->studentContent->first()->role === 'Молодежный комитет'): ?>
                        <?php $__currentLoopData = $student->studentContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                            <a class="course-title-link with-summary"><?php echo e($ssc->name); ?></a>
                                            <a class="course-title-link">Должность: <?php echo e($ssc->status); ?></a>
                                            <a class="course-title-link">Курс: <?php echo e($ssc->course); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>

                    <?php if($student->studentContent->first()->role === 'Отличники' || $student->studentContent->first()->role === 'Активист'): ?>
                        <div class="section-title-wrapper student-single">
                            <h4 class="section-title">Отличники</h4>
                        </div>
                        <?php $__currentLoopData = $student->studentContent->where('role', 'Отличники'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-12 w-dyn-item">
                            <div class="course-block-wrapper">
                                <div class="course-content-block flex-department-single">
                                    <div class="w-col-12">
                                        <a class="course-title-link with-summary"><?php echo e($ssc->name); ?></a>
                                        <br>
                                        <div class="block-body-d-s">
                                            <?php echo htmlspecialchars_decode($ssc->body); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="section-title-wrapper student-single student-single-2">
                            <h4 class="section-title">Активисты</h4>
                        </div>
                        <?php $__currentLoopData = $student->studentContent->where('role', 'Активист'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ssc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="featured-course-item w-col w-col-12 w-dyn-item">
                            <div class="course-block-wrapper">
                                <div class="course-content-block flex-department-single">
                                    <div class="w-col-3">
                                        <img src='<?php echo e(asset("files/storage/app/{$ssc->image}")); ?>' class="img-department-single">
                                    </div>
                                    <div class="w-col-9">
                                        <a class="course-title-link with-summary"><?php echo e($ssc->name); ?></a>
                                        <br>
                                        <div class="block-body-d-s">
                                            <?php echo htmlspecialchars_decode($ssc->body); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS-Panel\domains\Ikt\files\resources\views/pages/photos/student.blade.php ENDPATH**/ ?>
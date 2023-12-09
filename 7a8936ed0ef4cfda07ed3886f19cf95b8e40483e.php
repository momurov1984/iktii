<?php $__env->startSection('title'); ?>
    <?php echo e($category->name); ?> / <?php echo e($subCategory->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container w-container">
                <h1 class="page-header-title" data-ix="fade-in-on-load"><?php echo e($category->name); ?> / <?php echo e($subCategory->name); ?></h1>
                <h2 class="page-subtitle" data-ix="fade-in-on-load-2">Кафедра ФИИТ, КНУ имени Жусупа Баласагына&nbsp;</h2>
            </div>
        </div>
    </div>

    <div class="section stats tint">
        <div class="container w-container">
            <div class="hero-overlay-row w-row">
                <?php $__currentLoopData = $category->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="last stats-column w-col w-col-4" style="margin-bottom: 15px">
                        <a class="hero-overlay-block w-inline-block <?php echo e(Request::is("ych-programmy/{$category->slug}/{$cs->id}") ? 'active-sub' : ''); ?>" href="<?php echo e(route('pages.subCategory', [$category->slug, $cs->id])); ?>">
                            <div class="hero-overlay-block-title"><?php echo e($cs->name); ?></div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <?php if($subCategory->body || $subCategory->image): ?>
        <div class="section tint">
            <div class="container w-container">
                <div class="w-row">
                    <div class="container w-container">
                        <?php if($subCategory->image): ?>
                            <img src='<?php echo e(asset("files/storage/app/{$subCategory->image}")); ?>' alt="<?php echo e($subCategory->name); ?>" class="img-fluid">
                            <br>
                        <?php endif; ?>
                        <p><?php echo htmlspecialchars_decode($subCategory->body); ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if($subCategory->files->where('type', 0)->first()): ?>
        <div class="section">
            <div class="container w-container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Наши научные проекты</h2>
                    <div class="section-title-divider"></div>
                </div>
                <div class="featured-courses-list-wrapper w-dyn-list">
                    <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                        <?php $__currentLoopData = $subCategory->files->where('type', 0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                            <a href='<?php echo e(asset("files/storage/app/{$sf->file}")); ?>' target="_blank" class="course-title-link with-summary">
                                                <span><?php echo e($key+1); ?>) </span><?php echo e($sf->name); ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($subCategory->files->where('type', 1)->first()): ?>
        <div class="section">
            <div class="container w-container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Дипломные работы</h2>
                    <div class="section-title-divider"></div>
                </div>
                <div class="featured-courses-list-wrapper w-dyn-list">
                    <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                        <?php $__currentLoopData = $subCategory->files->where('type', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value=>$sf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                            <a href='<?php echo e(asset("files/storage/app/{$sf->file}")); ?>' target="_blank" class="course-title-link with-summary">
                                                <span><?php echo e($value+1); ?>) </span><?php echo e($sf->name); ?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($subCategory->files->where('type', 2)->first()): ?>
        <div class="section">
            <div class="container w-container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Публикации</h2>
                    <div class="section-title-divider"></div>
                </div>
                <div class="featured-courses-list-wrapper w-dyn-list">
                    <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                        <?php $__currentLoopData = $subCategory->files->where('type', 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item=>$sf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                            <a href='<?php echo e($sf->url); ?>' target="_blank" class="course-title-link with-summary">
                                                <span><?php echo e($item+1); ?>) </span><?php echo e($sf->name); ?>

                                                <br>
                                                <span><?php echo e($sf->url); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if($subCategory->teamDepartment->first()): ?>
        <div class="section">
            <div class="container w-container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Сотрудники</h2>
                    <div class="section-title-divider"></div>
                </div>
                <div class="featured-courses-list-wrapper w-dyn-list">
                    <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                        <?php $__currentLoopData = $subCategory->teamDepartment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $td): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-4">
                                            <img src='<?php echo e(asset("files/storage/app/{$td->image}")); ?>' class="img-department-single">
                                        </div>
                                        <div class="w-col-8">
                                            <a class="course-title-link with-summary"><?php echo e($td->name); ?></a>
                                            <a class="pdf-d-s"><?php echo e($td->status); ?></a>
                                            <?php if($td->pdf): ?>
                                                <a href='<?php echo e(url("files/storage/app/{$td->pdf}")); ?>' target="_blank" class="pdf-d-s">Резюме</a>
                                            <?php endif; ?>
                                            <br>
                                            <div class="block-body-d-s">
                                                <?php echo htmlspecialchars_decode($td->body); ?>

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
    <?php endif; ?>

    <?php if($subCategory->terms->first()): ?>
        <div class="section">
            <?php $__currentLoopData = $subCategory->terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($st->disciplines->first()): ?>
                <div class="container w-container">
                    <div class="featured-courses-list-wrapper w-dyn-list">
                        <div class="featured-courses-list w-clearfix w-dyn-items w-row">
                            <div class="featured-course-item w-col w-col-12 w-dyn-item">
                                <div class="course-block-wrapper">
                                    <div class="course-content-block flex-department-single">
                                        <div class="w-col-12">
                                            <section class="tablica">
                                                <div class="container">
                                                    <div class="tablica__wrapper">
                                                        <fieldset style="border:1px solid #ccc; border-radius: 4px; margin-bottom: 15px;">
                                                            <legend class="tablica__title"><?php echo e($st->name); ?></legend>
                                                                <table class="table table__primary">
                                                                    <tbody>
                                                                    <tr style="background-color: white; color: black;">
                                                                        <th style="border-top: 0; width: 90px; ">Код</th>
                                                                        <th style="border-top: 0; ">Название</th>
                                                                        <th style="border-top: 0; width: 100px;">Тип Курса*</th>
                                                                        <th style="border-top: 0; width: 90px;">T</th>
                                                                        <th style="border-top: 0; width: 90px;">U</th>
                                                                        <th style="border-top: 0; width: 100px;">K</th>
                                                                        <th style="border-top: 0; width: 90px;"><span title="Europian Credit Transfer and Accumlation System">ECTS</span></th>
                                                                    </tr>
                                                                    <?php $__currentLoopData = $st->disciplines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <td><?php echo e($sd->code); ?></td>
                                                                        <td>
                                                                            <a href='<?php echo e(url("files/storage/app/{$sd->file}")); ?>' target="_blank" class="matem">
                                                                                <?php echo e($sd->name); ?>

                                                                            </a>
                                                                        </td>
                                                                        <td><?php echo e($sd->type); ?></td>
                                                                        <td><?php echo e($sd->t); ?></td>
                                                                        <td><?php echo e($sd->u); ?></td>
                                                                        <td><?php echo e($sd->k); ?></td>
                                                                        <td><?php echo e($sd->ects); ?></td>
                                                                    </tr>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </tbody>
                                                                </table>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/pages/categories/subCategory.blade.php ENDPATH**/ ?>
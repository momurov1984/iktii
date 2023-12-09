<?php $__env->startSection('title'); ?>
    Студенты (материал)
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Студенты (материал)</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item">Студенты (материал)</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Студенты (материал)</h6>
                        <a href="<?php echo e(route('studentContent.create')); ?>" class="btn btn-info mb-1">Добавить</a>
                    </div>
                    <div class="table-responsive">
                        <?php if($mStudentContents->first()): ?>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Молодежный комитет</th>
                                    <th>Категория</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $mStudentContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($sc->id); ?></a></td>
                                        <td><?php echo e($sc->name); ?></td>
                                        <td><?php echo e($sc->student->name); ?></td>
                                        <td class="edit-del">
                                            <a href="<?php echo e(route('studentContent.edit', $sc->slug)); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <?php echo Form::open(['route' => ['studentContent.delete', $sc->slug], 'method' => 'delete']); ?>

                                            <button class="del-bak" type="submit" href="<?php echo e(route('studentContent.delete', $sc->slug)); ?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                        <?php echo e($mStudentContents->links()); ?>

                    </div>
                    <div class="table-responsive">
                        <?php if($aStudentContents->first()): ?>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Активисты и Отличники</th>
                                    <th>Статус</th>
                                    <th>Категория</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $aStudentContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($sc->id); ?></a></td>
                                        <td><?php echo e($sc->name); ?></td>
                                        <td><?php echo e($sc->role); ?></td>
                                        <td><?php echo e($sc->student->name); ?></td>
                                        <td class="edit-del">
                                            <a href="<?php echo e(route('studentContent.edit', $sc->slug)); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <?php echo Form::open(['route' => ['studentContent.delete', $sc->slug], 'method' => 'delete']); ?>

                                            <button class="del-bak" type="submit" href="<?php echo e(route('studentContent.delete', $sc->slug)); ?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($aStudentContents->links()); ?>

                        <?php endif; ?>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/studentContents/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    Расписание
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Расписание</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item">Расписание</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Расписание</h6>
                        <a href="<?php echo e(route('chartMaterial.create')); ?>" class="btn btn-info mb-1">Добавить</a>
                    </div>
                    <div class="table-responsive">
                        <?php if($chartMaterials->first()): ?>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Категория (учебный процесс)</th>
                                    <th>Курс</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $chartMaterials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($cm->id); ?></a></td>
                                        <td><?php echo e($cm->name); ?></td>
                                        <td><?php echo e($cm->chartContent->chart->name); ?></td>
                                        <td><?php echo e($cm->chartContent->name); ?></td>
                                        <td class="edit-del">
                                            <a href="<?php echo e(route('chartMaterial.edit', $cm->id)); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <?php echo Form::open(['route' => ['chartMaterial.delete', $cm->id], 'method' => 'delete']); ?>

                                            <button class="del-bak" type="submit" href="<?php echo e(route('chartMaterial.delete', $cm->id)); ?>">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <div class="alert alert-light" role="alert">
                                Расписание не добавлены!
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <?php echo e($chartMaterials->links()); ?>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/chartMaterials/index.blade.php ENDPATH**/ ?>
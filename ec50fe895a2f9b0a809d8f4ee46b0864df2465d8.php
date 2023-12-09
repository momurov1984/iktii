<?php $__env->startSection('title'); ?>
    Инструкция
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Инструкция</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item">Инструкция</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Инструкция</h6>
                        <a href="<?php echo e(route('instruction.create')); ?>" class="btn btn-info mb-1">Добавить</a>
                    </div>
                    <div class="table-responsive">
                        <?php if($instructions->first()): ?>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $instructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($i->id); ?></a></td>
                                        <td><?php echo e($i->name); ?></td>
                                        <td class="edit-del">
                                            <a href="<?php echo e(route('instruction.edit', $i->slug)); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <?php echo Form::open(['route' => ['instruction.delete', $i->slug], 'method' => 'delete']); ?>

                                            <button class="del-bak" type="submit" href="<?php echo e(route('instruction.delete', $i->slug)); ?>">
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
                                Инструкция не добавлены!
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <?php echo e($instructions->links()); ?>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/admin/instructions/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    Файлы
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Файлы</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item">Файлы</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Файлы</h6>
                        <a href="<?php echo e(route('files.create')); ?>" class="btn btn-info mb-1">Добавить</a>
                    </div>
                    <div class="table-responsive">
                        <?php if($files->first()): ?>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Категория</th>
                                    <th>Под Категория</th>
                                    <th>Раздел</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a href="#"><?php echo e($file->id); ?></a></td>
                                        <td><?php echo e(Str::limit($file->name, 50)); ?></td>
                                        <td><?php echo e($file->category->name??''); ?></td>
                                        <td><?php echo e($file->subcategory->name??''); ?></td>
                                        <td>
                                            <?php if($file->type == 0): ?>
                                                Научные проекты
                                            <?php endif; ?>
                                            <?php if($file->type == 1): ?>
                                                Дипломные работы
                                            <?php endif; ?>
                                            <?php if($file->type == 2): ?>
                                                Публикации
                                            <?php endif; ?>
                                        </td>
                                        <td class="edit-del">
                                            <a href="<?php echo e(route('files.edit', $file->id)); ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <?php echo Form::open(['route' => ['files.delete', $file->id], 'method' => 'delete']); ?>

                                            <button class="del-bak" type="submit" href="<?php echo e(route('files.delete', $file->id)); ?>">
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
                                Файлы не добавлены!
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <?php echo e($files->links()); ?>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS-Panel\domains\Ikt\files\resources\views/admin/files/index.blade.php ENDPATH**/ ?>
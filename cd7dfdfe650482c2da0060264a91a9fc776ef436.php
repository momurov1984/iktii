<?php $__env->startSection('title'); ?>
    <?php echo e($photoCategory->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($photoCategory->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('photoCategory.index')); ?>">Фотогалерея (категории)</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($photoCategory->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($photoCategory->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($photoCategory, ['route' => ['photoCategory.update', $photoCategory->slug], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название категории'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <?php echo Form::submit('Сохранить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/photoCategories/edit.blade.php ENDPATH**/ ?>
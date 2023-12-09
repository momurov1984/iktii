<?php $__env->startSection('title'); ?>
    <?php echo e($id->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($id->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chartContent.index')); ?>">Курсы</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($id->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($id->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($id, ['route' => ['chartContent.update', $id->id], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Какой курс'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('chart_id', 'Категории (Учебный процесс)'); ?>

                            <?php echo Form::select('chart_id', $charts, null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('chart_id')): ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/chartContents/edit.blade.php ENDPATH**/ ?>
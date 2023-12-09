<?php $__env->startSection('title'); ?>
    <?php echo e($id->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($id->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('programs.index')); ?>">Основная образовательная программа</a></li>
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
                        <?php echo Form::model($id, ['route' => ['programs.update', $id->id], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название файла'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название файла']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('department_id', 'Кафедра'); ?>

                            <?php echo Form::select('department_id', $departments, null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('department_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <?php echo Form::label('pdf', 'Файл'); ?>

                            <div>
                                <iframe src='<?php echo e(asset("files/storage/app/{$id->pdf}")); ?>'>
                                    Ваш браузер не поддерживает фреймы
                                </iframe>
                                <br>
                                <a target="_blank" href='<?php echo e(url("files/storage/app/{$id->pdf}")); ?>'>Файл</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('pdf', 'Выберите файл (только в pdf формате)'); ?>

                                <?php echo Form::file('pdf', ['class' => 'form-control']); ?>

                                <?php if($errors->has('pdf')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <?php echo Form::submit('Сохранить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/programs/edit.blade.php ENDPATH**/ ?>
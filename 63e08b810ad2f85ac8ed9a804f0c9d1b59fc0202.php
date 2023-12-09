<?php $__env->startSection('title'); ?>
    <?php echo e($id->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($id->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('administrator.index')); ?>">Админимтсраторы</a></li>
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
                        <?php echo Form::model($id, ['route' => ['administrator.update', $id->id], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'ФИО администратора'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('email', 'Email администратора'); ?>

                            <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('role', 'Статус работника'); ?>

                            <?php echo Form::select('role', ['0' => 'Администратор', '1' => 'Менеджер'], null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('role')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('password', 'Пароль администратора'); ?>

                            <?php echo Form::password('password', ['class' => 'form-control']); ?>

                            <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('password_confirmation', 'Повтор пароля администратора'); ?>

                            <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

                        </div>
                        <?php echo Form::submit('Сохранить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\karkaz.loc\files\resources\views/admin/admins/edit.blade.php ENDPATH**/ ?>
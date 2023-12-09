<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo e(asset('img/logo/logo.png')); ?>" rel="icon">
    <title>Admin - Login</title>
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/ruang-admin.css')); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-login">
<!-- Login Content -->
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Вход в админку</h1>
                                </div>

                                <?php echo Form::open(['route' => 'admin.login.submit', 'class' => 'user']); ?>

                                <div class="form-group">
                                    <?php echo Form::label('email', 'Email адрес'); ?>

                                    <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email адрес']); ?>

                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::label('password', 'Пароль'); ?>

                                    <?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => 'Пароль']); ?>

                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::submit('Войти', ['class' => 'btn btn-primary btn-block']); ?>

                                </div>
                                <hr>
                                <?php echo Form::close(); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/ruang-admin.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>
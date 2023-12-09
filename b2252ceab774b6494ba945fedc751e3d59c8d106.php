<?php $__env->startSection('title'); ?>
    Добавление нового материала
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление нового материала</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('subMenu.index')); ?>">Под меню (Факультет)</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление нового материала</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление нового материала</h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(['route' => 'subMenu.store', 'method' => 'put', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название под меню (Факультет)'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название под меню']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('body', 'Соддержание под меню'); ?>

                            <?php echo Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Соддержание под меню']); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('image', 'Выберит изображение, если это необходимо'); ?>

                                <?php echo Form::file('image', ['class' => 'form-control']); ?>

                                <?php if($errors->has('image')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('pdf', 'Выберите файл, если это необходимо (только в pdf формате)'); ?>

                                <?php echo Form::file('pdf', ['class' => 'form-control']); ?>

                                <?php if($errors->has('pdf')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <?php echo Form::reset('Очистить', ['class' => 'btn btn-primary']); ?>

                        <?php echo Form::submit('Добавить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/admin/subMenus/create.blade.php ENDPATH**/ ?>
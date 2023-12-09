<?php $__env->startSection('title'); ?>
    <?php echo e($team->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($team->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('team.index')); ?>">Состав кафедры</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($team->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($team->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($team, ['route' => ['team.update', $team->slug], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'ФИО'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('status', 'Должность'); ?>

                            <?php echo Form::text('status', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('status')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('body', 'Информация о преподе'); ?>

                            <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('image', 'Изображение'); ?>

                            <div>
                                <img src='<?php echo e(asset("files/storage/app/{$team->image}")); ?>' class="img-thumbnail img-fluid" alt="Responsive image" width="20%">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('image', 'Изображение'); ?>

                                <?php echo Form::file('image', ['class' => 'form-control']); ?>

                                <?php if($errors->has('image')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <?php echo Form::label('pdf', 'Резюме'); ?>

                            <div>
                                <iframe src='<?php echo e(asset("files/storage/app/{$team->pdf}")); ?>'>
                                    Ваш браузер не поддерживает фреймы
                                </iframe>
                                <br>
                                <a target="_blank" href='<?php echo e(url("files/storage/app/{$team->pdf}")); ?>'>Резюме</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('pdf', 'Выберите файл (резюме только в pdf формате)'); ?>

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
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/teams/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e($instruction->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($instruction->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('instruction.index')); ?>">Инструкция</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($instruction->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($instruction->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($instruction, ['route' => ['instruction.update', $instruction->slug], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название Инструкции'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('url', 'Ссылка (url адрес)'); ?>

                            <?php echo Form::text('url', null, ['class' => 'form-control']); ?>

                        </div>
                        <br>
                        <?php if($instruction->video): ?>
                        <div class="form-group">
                            <?php echo Form::label('video', 'Файл'); ?>

                            <div>
                                <iframe width="560" height="315" src='<?php echo e(asset("files/storage/app/{$instruction->video}")); ?>' allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('video', 'Выберите файл'); ?>

                                <?php echo Form::file('video', ['class' => 'form-control']); ?>

                                <?php if($errors->has('video')): ?>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/instructions/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    Добавление новго материала
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление новго материала</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('fiitBlog.index')); ?>">Новости ФИИТ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление новго материала</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление новго материала</h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(['route' => 'fiitBlog.store', 'method' => 'put', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название блога ФИИТ'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название блога ФИИТ']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('body', 'Описание блога'); ?>

                            <?php echo Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Описание блога']); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('image', 'Выберите файл'); ?>

                                <?php echo Form::file('image', ['class' => 'form-control']); ?>

                                <?php if($errors->has('image')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="uploads">Добавить несколько изображений</label>
                                <input type="file" name="uploads[]" multiple class="form-control" id="uploads">
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/fiitBlogs/create.blade.php ENDPATH**/ ?>
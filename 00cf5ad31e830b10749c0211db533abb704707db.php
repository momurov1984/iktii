<?php $__env->startSection('title'); ?>
    <?php echo e($fiitBlog->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($fiitBlog->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('fiitBlog.index')); ?>">Новости КНУ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($fiitBlog->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($fiitBlog->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($fiitBlog, ['route' => ['fiitBlog.update', $fiitBlog->slug], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название блога КНУ'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('body', 'Описание блога'); ?>

                            <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('image', 'Изображение'); ?>

                            <div>
                                <img src='<?php echo e(asset("files/storage/app/{$fiitBlog->image}")); ?>' class="img-thumbnail img-fluid" alt="Responsive image" width="20%">
                            </div>
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
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="uploads">Добавить несколько изображений</label>
                                <input type="file" name="uploads[]" multiple class="form-control" id="uploads">
                            </div>
                        </div>
                        <br>
                        <?php echo Form::submit('Сохранить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                        <br>
                        <div class="form-group">
                            <label for="uploads">Изображения</label>
                            <div class="row justify-content-start">
                                <?php $__currentLoopData = $fiitBlog->fiitUpload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-2">
                                        <img src='<?php echo e(asset("files/storage/app/{$bu->uploads}")); ?>' class="img-thumbnail img-fluid" alt="Responsive image">
                                        <?php echo Form::open(['route' => ['fiitUpload.delete', $bu->id], 'method' => 'delete']); ?>

                                        <button class="del-bak" type="submit" href="<?php echo e(route('fiitUpload.delete', $bu->id)); ?>">
                                            Удалить
                                        </button>
                                        <?php echo Form::close(); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <br>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/fiitBlogs/edit.blade.php ENDPATH**/ ?>
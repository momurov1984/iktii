<?php $__env->startSection('title'); ?>
    Добавление нового материала
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление нового материала</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('studentContent.index')); ?>">Студенты (материал)</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление нового материала</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление нового материала</h6>
                    </div>
                    <br>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Добавить материал для категории (молодежный комитет)
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo Form::open(['route' => 'studentContent.store', 'method' => 'put', 'files' => true]); ?>

                                    <div class="form-group">
                                        <input name="role" type="hidden" class="form-control" value="Молодежный комитет">
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('name', 'ФИО студента'); ?>

                                        <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ФИО студента']); ?>

                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('student_id', 'Категории'); ?>

                                        <?php echo Form::select('student_id', $students, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']); ?>

                                        <?php if($errors->has('student_id')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('status', 'Должность студента'); ?>

                                        <?php echo Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Должность студента']); ?>

                                        <?php if($errors->has('status')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('course', 'Какой курс'); ?>

                                        <?php echo Form::text('course', null, ['class' => 'form-control', 'placeholder' => '1, 2, 3 ...']); ?>

                                        <?php if($errors->has('course')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <br>
                                    <hr>
                                    <?php echo Form::reset('Очистить', ['class' => 'btn btn-primary']); ?>

                                    <?php echo Form::submit('Добавить', ['class' => 'btn btn-success']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Добавить материал для категории (Активисты и отличиники) - Активиста
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo Form::open(['route' => 'studentContent.store2', 'method' => 'put', 'files' => true]); ?>

                                    <div class="form-group">
                                        <input name="role" type="hidden" class="form-control" value="Активист">
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('name', 'ФИО студента (Активиста)'); ?>

                                        <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ФИО студента (Активиста)']); ?>

                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('student_id', 'Категории'); ?>

                                        <?php echo Form::select('student_id', $students, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']); ?>

                                        <?php if($errors->has('student_id')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('body', 'Описание'); ?>

                                        <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

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
                                    <?php echo Form::reset('Очистить', ['class' => 'btn btn-primary']); ?>

                                    <?php echo Form::submit('Добавить', ['class' => 'btn btn-success']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Добавить материал для категории (Активисты и отличиники) - Отличиника
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <?php echo Form::open(['route' => 'studentContent.store3', 'method' => 'put', 'files' => true]); ?>

                                    <div class="form-group">
                                        <input name="role" type="hidden" class="form-control" value="Отличники">
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('name', 'Какой курс'); ?>

                                        <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => '1 курс']); ?>

                                        <?php if($errors->has('name')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('student_id', 'Категории'); ?>

                                        <?php echo Form::select('student_id', $students, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']); ?>

                                        <?php if($errors->has('student_id')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo Form::label('body', 'Описание'); ?>

                                        <?php echo Form::textarea('body', null, ['class' => 'form-control', 'id'=>'body2']); ?>

                                        <?php if($errors->has('body')): ?>
                                            <span class="text-danger">Это поле обьязательно!</span>
                                        <?php endif; ?>
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
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
    <script>
        CKEDITOR.replace( 'body2' );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/studentContents/create.blade.php ENDPATH**/ ?>
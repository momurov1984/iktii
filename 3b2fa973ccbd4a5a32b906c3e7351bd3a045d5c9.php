<?php $__env->startSection('title'); ?>
    Добавление Дисциплины
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавление Дисциплины</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('disciplines.index')); ?>">Дисциплины</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавление Дисциплины</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Добавление Дисциплины</h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(['route' => 'disciplines.store', 'method' => 'put', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Название']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('category_id', 'Категории'); ?>

                            <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']); ?>

                            <?php if($errors->has('category_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="sub_category_id" class="form-label">Под Категория</label>
                            <select class="form-control" id="sub_category_id" name="sub_category_id">
                                <option></option>
                            </select>

                            <?php if($errors->has('sub_category_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="term_id" class="form-label">Семестры</label>
                            <select class="form-control" id="term_id" name="term_id">
                                <option></option>
                            </select>

                            <?php if($errors->has('term_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('code', 'Код'); ?>

                            <?php echo Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Код']); ?>

                            <?php if($errors->has('code')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('type', 'Тип Курса'); ?>

                            <?php echo Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Тип Курса']); ?>

                            <?php if($errors->has('type')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('t', 'T'); ?>

                            <?php echo Form::text('t', null, ['class' => 'form-control', 'placeholder' => 'T']); ?>

                            <?php if($errors->has('t')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('u', 'U'); ?>

                            <?php echo Form::text('u', null, ['class' => 'form-control', 'placeholder' => 'U']); ?>

                            <?php if($errors->has('u')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('k', 'K'); ?>

                            <?php echo Form::text('k', null, ['class' => 'form-control', 'placeholder' => 'K']); ?>

                            <?php if($errors->has('k')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('ects', 'ECTS'); ?>

                            <?php echo Form::text('ects', null, ['class' => 'form-control', 'placeholder' => 'ECTS']); ?>

                            <?php if($errors->has('ects')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('file', 'Выберите файл'); ?>

                                <?php echo Form::file('file', ['class' => 'form-control']); ?>

                            </div>
                            <?php if($errors->has('sub_category_id')): ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="category_id"]').on('change', function (){
                var category_id = $(this).val();
                if(category_id){
                    $.ajax({
                        url: "<?php echo e(url('/admin/files/ajax')); ?>/"+category_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data){
                            $('select[name="sub_category_id"]').html('');
                            var d = $('select[name="sub_category_id"]').empty();
                            $.each(data, function (key, value){
                                $('select[name="sub_category_id"]').append('<option value="' +value.id+ '">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });

        $(document).ready(function(){
            $('select[name="sub_category_id"]').on('change', function (){
                var subcategory_id = $(this).val();
                if(subcategory_id){
                    $.ajax({
                        url: "<?php echo e(url('/admin/files/disciplines/ajax')); ?>/"+subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data){
                            $('select[name="term_id"]').html('');
                            var d = $('select[name="term_id"]').empty();
                            $.each(data, function (key, value){
                                $('select[name="term_id"]').append('<option value="' +value.id+ '">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/admin/disciplines/create.blade.php ENDPATH**/ ?>
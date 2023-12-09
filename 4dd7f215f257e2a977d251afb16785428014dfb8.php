<?php $__env->startSection('title'); ?>
    Группа: <?php echo e($id->name); ?>, (<?php echo e($id->chartContent->name); ?> - <?php echo e($id->chartContent->chart->name); ?>)
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Группа: <?php echo e($id->name); ?>, (<?php echo e($id->chartContent->name); ?> - <?php echo e($id->chartContent->chart->name); ?>)</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('chartMaterial.index')); ?>">Расписание</a></li>
                <li class="breadcrumb-item active" aria-current="page">Группа: <?php echo e($id->name); ?>, (<?php echo e($id->chartContent->name); ?> - <?php echo e($id->chartContent->chart->name); ?>)</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Группа: <?php echo e($id->name); ?>, (<?php echo e($id->chartContent->name); ?> - <?php echo e($id->chartContent->chart->name); ?>)</h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($id, ['route' => ['chartMaterial.update', $id->id], 'method' => 'post', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('name', 'Название группы'); ?>

                            <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('name')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="chart_id">Категории (Учебный процесс)</label>
                            <select class="form-control" id="chart_id" name="chart_id">
                                <option selected="selected"><?php echo e($id->chartContent->chart->name); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="chart_content_id">Курсы</label>
                            <select class="form-control" id="chart_content_id" name="chart_content_id">
                                <option value="<?php echo e($id->chartContent->id); ?>" selected="selected"><?php echo e($id->chartContent->name); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('body', 'Описание'); ?>

                            <?php echo Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Описание']); ?>

                            <?php if($errors->has('body')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('pdf', 'Расписание'); ?>

                            <div>
                                <iframe src='<?php echo e(asset("files/storage/app/{$id->pdf}")); ?>'>
                                    Ваш браузер не поддерживает фреймы
                                </iframe>
                                <br>
                                <a target="_blank" href='<?php echo e(url("files/storage/app/{$id->pdf}")); ?>'>Расписание</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <?php echo Form::label('pdf', 'Расписание (только в pdf формате)'); ?>

                                <?php echo Form::file('pdf', ['class' => 'form-control']); ?>

                                <?php if($errors->has('pdf')): ?>
                                    <span class="text-danger">Это поле обьязательно!</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php echo Form::submit('Сохранить', ['class' => 'btn btn-success']); ?>

                        <?php echo Form::close(); ?>

                        <br>
                        <h3 class="h3">Изменить категорию (Учебный процесс)</h3>
                        <br>
                        <?php echo Form::model($id, ['route' => ['chartMaterial.update2', $id->id], 'method' => 'put', 'files' => true]); ?>

                        <div class="form-group">
                            <?php echo Form::label('chart_id', 'Категории (Учебный процесс)'); ?>

                            <?php echo Form::select('chart_id', $charts, null, ['class' => 'form-control', 'placeholder' => 'Выберите пункт']); ?>

                            <?php if($errors->has('chart_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group block-hide" style="display: none;">
                            <?php echo Form::label('chart_content_id', 'Курсы'); ?>

                            <?php echo Form::select('chart_content_id', [''=>'Выберите категорию'], null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('chart_content_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
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
    <script type="text/javascript">
        $("select[name='chart_id']").change(function(){
            var chart_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo e(route('select-ajax')); ?>",
                method: 'POST',
                data: {chart_id:chart_id, _token:token},
                success: function(data) {
                    if (chart_id == '')
                    {
                        $('.block-hide').hide();
                    } else {
                        $('.block-hide').show();
                    }
                    $("select[name='chart_content_id']").html('');
                    $("select[name='chart_content_id']").html(data.options);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/m/mommyc6w/fiit.bstudios.ru/public_html/files/resources/views/admin/chartMaterials/edit.blade.php ENDPATH**/ ?>
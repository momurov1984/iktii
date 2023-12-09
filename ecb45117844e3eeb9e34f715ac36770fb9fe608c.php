<?php $__env->startSection('title'); ?>
    <?php echo e($teamDepartment->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($teamDepartment->name); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.index')); ?>">Главная</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('teamDepartment.index')); ?>">Сотрудники</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($teamDepartment->name); ?></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e($teamDepartment->name); ?></h6>
                    </div>
                    <div class="card-body">
                        <?php echo Form::model($teamDepartment, ['route' => ['teamDepartment.update', $teamDepartment->slug], 'method' => 'post', 'files' => true]); ?>

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
                            <?php echo Form::label('category_id', 'Уч программа'); ?>

                            <?php echo Form::select('category_id', $categories, null, ['class' => 'form-control']); ?>

                            <?php if($errors->has('category_id')): ?>
                                <span class="text-danger">Это поле обьязательно!</span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="sub_category_id" class="form-label">Под Категория</label>
                            <select class="form-control" id="sub_category_id" name="sub_category_id">
                                <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($subCategory->id); ?>" <?php echo e($teamDepartment->subcategory_id == $subCategory->id ? 'selected' : ''); ?>>
                                        <?php echo e($subCategory->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
                                <img src='<?php echo e(asset("files/storage/app/{$teamDepartment->image}")); ?>' class="img-thumbnail img-fluid" alt="Responsive image" width="20%">
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
                        <?php if($teamDepartment->pdf): ?>
                        <div class="form-group">
                            <?php echo Form::label('pdf', 'Резюме'); ?>

                            <div>
                                <iframe src='<?php echo e(asset("files/storage/app/{$teamDepartment->pdf}")); ?>'>
                                    Ваш браузер не поддерживает фреймы
                                </iframe>
                                <br>
                                <a target="_blank" href='<?php echo e(url("files/storage/app/{$teamDepartment->pdf}")); ?>'>Резюме</a>
                            </div>
                        </div>
                        <?php endif; ?>
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/admin/teamDepartments/edit.blade.php ENDPATH**/ ?>
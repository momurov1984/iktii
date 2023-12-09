<?php if(!empty($chartContents)): ?>
    <option value="">Выберите пункт</option>
    <?php $__currentLoopData = $chartContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/include/ajax-select.blade.php ENDPATH**/ ?>
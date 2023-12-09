<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/ruang-admin.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>

<script>
    setTimeout(function () {
        $('.status').fadeOut('slow')
    }, 1500);
</script>


<script>
    setTimeout(function () {
        $('.danger').fadeOut('slow')
    }, 1500);
</script>
<?php /**PATH D:\OS-Panel\domains\Ikt\files\resources\views/admin/include/script.blade.php ENDPATH**/ ?>
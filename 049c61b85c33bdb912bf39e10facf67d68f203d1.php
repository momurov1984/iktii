<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.include.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body id="page-top">
    <?php if(session('status')): ?>
        <div class="alert alert-primary status" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('danger')): ?>
        <div class="alert alert-danger danger" role="alert">
            <?php echo e(session('danger')); ?>

        </div>
    <?php endif; ?>
    <div id="wrapper">
        <!-- Sidebar -->
        <?php echo $__env->make('admin.include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php echo $__env->make('admin.include.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <?php echo $__env->yieldContent('content'); ?>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                <span>copyright &copy; 2020 - developed by
                  <b><a href="https://bstudio.kg/" target="_blank">BStudio</a></b>
                </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php echo $__env->make('admin.include.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/admin/layout.blade.php ENDPATH**/ ?>
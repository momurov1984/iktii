<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('pages.index')); ?>" target="_blank">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('img/logo/logo2.png')); ?>">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Главная</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Категории</span>
        </a>
        <div id="collapseBootstrap" class="collapse
            <?php echo e(request()->route()->getName() === 'category.index' ? 'show' : ''); ?>

            <?php echo e(request()->route()->getName() === 'subcategory.index' ? 'show' : ''); ?>

            " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Категории</h6>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'category.index' ? 'active' : ''); ?>" href="<?php echo e(route('category.index')); ?>">
                    Категории
                </a>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'subcategory.index' ? 'active' : ''); ?>" href="<?php echo e(route('subcategory.index')); ?>">
                    Подкатегории
                </a>
            </div>
        </div>
    </li>
    <?php if(Auth::guard('admin')->user()->role == 0): ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->route()->getName() === 'administrator.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('administrator.index')); ?>">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Администраторы</span>
            </a>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link">
                <i class="fab fa-fw fa-wpforms"></i>
                <span class="text-danger">Нет доступа!</span>
            </a>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Forms</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>
<?php /**PATH E:\OS\OSPanel\domains\karkaz.loc\files\resources\views/admin/include/sidebar.blade.php ENDPATH**/ ?>
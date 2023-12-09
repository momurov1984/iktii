<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.index')); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('img/logo/logo2.png')); ?>">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('pages.index')); ?>" target="_blank">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>На сайт ФИИТ</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Главная</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Меню
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Фотогалерея</span>
        </a>
        <div id="collapseBootstrap" class="collapse
            <?php echo e(request()->route()->getName() === 'photoCategory.index' ? 'show' : ''); ?>

            <?php echo e(request()->route()->getName() === 'photoSubcategory.index' ? 'show' : ''); ?>

            " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Фотогалерея</h6>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'photoCategory.index' ? 'active' : ''); ?>" href="<?php echo e(route('photoCategory.index')); ?>">
                    Категории
                </a>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'photoSubcategory.index' ? 'active' : ''); ?>" href="<?php echo e(route('photoSubcategory.index')); ?>">
                    Фотогалерея
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#student"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Студенческая жизнь</span>
        </a>
        <div id="student" class="collapse
            <?php echo e(request()->route()->getName() === 'student.index' ? 'show' : ''); ?>

        <?php echo e(request()->route()->getName() === 'studentContent.index' ? 'show' : ''); ?>

            " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Студенческая жизнь</h6>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'student.index' ? 'active' : ''); ?>" href="<?php echo e(route('student.index')); ?>">
                    Категории
                </a>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'studentContent.index' ? 'active' : ''); ?>" href="<?php echo e(route('studentContent.index')); ?>">
                    Студенты
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#chart"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Учебный процесс</span>
        </a>
        <div id="chart" class="collapse
            <?php echo e(request()->route()->getName() === 'chart.index' ? 'show' : ''); ?>

        <?php echo e(request()->route()->getName() === 'chartContent.index' ? 'show' : ''); ?>

        <?php echo e(request()->route()->getName() === 'chartMaterial.index' ? 'show' : ''); ?>

            " aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Учебный процесс</h6>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'chart.index' ? 'active' : ''); ?>" href="<?php echo e(route('chart.index')); ?>">
                    Категории
                </a>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'chartContent.index' ? 'active' : ''); ?>" href="<?php echo e(route('chartContent.index')); ?>">
                    Курсы
                </a>
                <a class="collapse-item <?php echo e(request()->route()->getName() === 'chartMaterial.index' ? 'active' : ''); ?>" href="<?php echo e(route('chartMaterial.index')); ?>">
                    Расписание
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'subMenu.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('subMenu.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Под меню (Факультет)</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'block.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('block.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>3 Блок кол-во кафедры</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'team.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('team.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Руководство</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'slider.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('slider.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Слайдер</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'blog.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('blog.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Новости КНУ</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'fiitBlog.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('fiitBlog.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Новости ФИИТ</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'department.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('department.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Кафедры</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request()->route()->getName() === 'teamDepartment.index' ? 'active-bg' : ''); ?>" href="<?php echo e(route('teamDepartment.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Состав кафедры</span>
        </a>
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
    <hr class="sidebar-divider">
</ul>
<?php /**PATH E:\OS\OSPanel\domains\fiit.loc\files\resources\views/admin/include/sidebar.blade.php ENDPATH**/ ?>
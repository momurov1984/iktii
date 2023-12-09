<?php $__env->startSection('title'); ?>
    Кыргызский национальный университет имени Жусупа Баласагына
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="hero-section smaller">
        <div class="hero-content-overlay-block w-hidden-small w-hidden-tiny"></div>
        <div class="auto-height hero-slider w-slider" data-animation="slide" data-autoplay="1" data-delay="7000" data-duration="600" data-infinite="1" data-ix="show-hero-slider-arrow">
            <div class="w-slider-mask">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hero-slide w-slide" style="background-image: url('/files/storage/app/<?php echo e($s->image); ?>');">
                    <div class="hero-slide-overlay padding">
                        <div class="slide-load-boar">
                            <div class="slide-load-bar-fill" data-ix="fill-slide-load-bar"></div>
                        </div>
                        <div class="container hero-slide-container w-container">
                            <div class="hero-slide-content-block">
                                <h1 class="hero-slide-title" data-ix="slide-title-2">
                                    <?php echo e($s->name); ?>

                                </h1>
                                <div class="slide-intro-paragraph" data-ix="slide-title-3">
                                    <?php echo htmlspecialchars_decode($s->body); ?>

                                </div>
                                <a class="button slider-button w-button" data-ix="slide-title-4" href="<?php echo e($s->url); ?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="hero-slider-button w-hidden-small w-hidden-tiny w-slider-arrow-left" data-ix="hide-slider-arrow">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="hero-slider-button w-hidden-small w-hidden-tiny w-slider-arrow-right" data-ix="hide-slider-arrow">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="hero-slider-nav w-hidden-main w-hidden-medium w-round w-slider-nav"></div>
        </div>
    </div>

    <div class="section stats tint">
        <div class="container w-container">
            <div class="hero-overlay-row w-row">
                <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="last stats-column w-col w-col-4">
                        <a class="hero-overlay-block w-inline-block" href="<?php echo e($b->url); ?>">
                            <div class="hero-overlay-number"><!--<?php echo e($b->number); ?>--></div>
                            <div class="hero-overlay-block-title"><?php echo e($b->name); ?></div>
                            <p class="link-block-paragraph"><!--<?php echo e($b->body); ?>--></p>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="w-row">
                <div class="about-column-right w-col w-col-12">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">Новости ФИИТ</h2>
                        <div class="bottom-info-text"><a href="<?php echo e(route('pages.blog')); ?>">Все новости →</a></div>
                        <div class="section-title-divider"></div>
                    </div>
                    <?php $__currentLoopData = $fiitBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="video-lightbox w-inline-block w-lightbox" href="#">
                            <div class="about-image-block" style="background-image: url('/files/storage/app/<?php echo e($fb->image); ?>');"></div>
                        </a>
                        <a class="event-title-link" href="<?php echo e(route('pages.blog.fiit.show', $fb->slug)); ?>">
                            <?php echo e($fb->name); ?>

                        </a>
                        <p><?php echo htmlspecialchars_decode(str_limit($fb->body, 200)); ?></p>
                        <a class="link-below-paragraph" href="<?php echo e(route('pages.blog.fiit.show', $fb->slug)); ?>">Читать полностью →</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Уч. программы</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="w-dyn-list">
                <div class="w-clearfix w-dyn-items w-row">
                    <?php $__currentLoopData = \App\Category::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="featured-course-item w-col w-col-4 w-dyn-item">
                        <div class="course-block-wrapper">
                            <div class="course-content-block" style="padding: 33px 25px; text-align: center; height: 100px;display: flex; justify-content: center;align-items: center">
                                <a class="course-title-link" href="<?php echo e(route('pages.category', $c->slug)); ?>"><?php echo e($c->name); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="image-section">
        <div class="image-section-overlay">
            <div class="container w-container">
                <div class="image-section-content-block">
                    <h2 class="image-section-title">АБИТУРИЕНТ - 2020</h2>
                    <h2 class="_2 image-section-title">
                        <b>
                            УВАЖАЕМЫЕ АБИТУРИЕНТЫ! <br> <br>
                            Добро пожаловать в Кыргызский национальный университет имени Жусупа Баласагына
                        </b>
                    </h2>
                    <a class="button slider-button w-button" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSe1PMmeRY5EWESOJZGpQjfozVCn6XCrk9Lg9p0wvVoakqclbQ/viewform">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section tint">
        <div class="container w-container">
            <div class="w-row">
                <div class="about-column-right w-col w-col-12">
                    <div class="section-title-wrapper">
                        <h2 class="section-title">О Факультете</h2>
                        <div class="section-title-divider"></div>
                    </div>
                    <a class="video-lightbox w-inline-block w-lightbox" href="<?php echo e(route('pages.department.subMenu', $about->slug)); ?>">
                        <div class="about-image-block"></div>
                    </a>
                    <div><?php echo htmlspecialchars_decode(str_limit($about->body, 1000)); ?></div>
                    <a class="link-below-paragraph" href="<?php echo e(route('pages.department.subMenu', $about->slug)); ?>">Читать полностью →</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container w-container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Последние новости КНУ</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="upcoming-events-list-wrapper w-dyn-list">
                <div class="w-dyn-items">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="event-item w-dyn-item">
                            <a class="event-image-block w-inline-block" style="background-image: url('/files/storage/app/<?php echo e($b->image); ?>');" href="#"></a>
                            <div class="event-info-block">
                                <a class="event-title-link" href="<?php echo e(route('pages.blog.knu.show', $b->slug)); ?>">
                                    <?php echo e($b->name); ?>

                                </a>
                                <div class="event-info-wrapper">
                                    <div class="course-info-icon"></div>
                                    <div class="event-info-title"><?php echo e($b->created_at->format('d.m.Y')); ?></div>
                                </div>
                                <a class="button events-learn-more w-button" href="<?php echo e(route('pages.blog.knu.show', $b->slug)); ?>">Читать полностью →</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="bottom-info-text"><a href="<?php echo e(route('pages.blog')); ?>">Все новости →</a></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\domains\fiit.loc\files\resources\views/pages/index.blade.php ENDPATH**/ ?>
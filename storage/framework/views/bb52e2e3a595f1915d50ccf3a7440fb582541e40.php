<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/fonts/fontawesome5-overrides.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/css/styles.min.css')); ?>">

    <?php echo $__env->yieldContent('headers'); ?>
</head>

<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
               href="<?php echo e(route('welcome')); ?>">
                <div class="sidebar-brand-icon rotate-n-15"></div>
                <div class="sidebar-brand-text mx-3"><span>ASTU-EDC</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('dashboard_index')); ?>"><i
                            class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"></li>
                <li class="nav-item">

                    <a class="nav-link" href="<?php echo e(route('startup_index')); ?>"><i class="fas fa-user-circle"></i>Startups</a>
                    <a class="nav-link" href="<?php echo e(route('news_index')); ?>"><i class="fas fa-user-circle"></i>News</a>
                    <a class="nav-link" href="<?php echo e(route('testimonial_index')); ?>"><i
                            class="fas fa-user-circle"></i><span>Testimonials</span></a>
                    <a class="nav-link" href="<?php echo e(route('team_index')); ?>"><i class="fas fa-user-circle"></i><span>Team Members</span></a>
                    <a class="nav-link" href="<?php echo e(route('partner_index')); ?>"><i class="fas fa-user-circle"></i><span>Partners</span></a>
                </li>
            </ul>
            <div class="text-center d-none d-md-inline">
                <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
            </div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-0 topbar static-top">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i
                            class="fas fa-bars"></i></button>

                    <h3 class="text-dark">
                        <?php echo $__env->yieldContent('header'); ?>
                    </h3>

                    <ul class="navbar-nav flex-nowrap ml-auto">

                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                                                            aria-expanded="false" data-toggle="dropdown"
                                                                            href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in"
                                 aria-labelledby="searchDropdown">
                            </div>
                        </li>

                        
                        

                        <?php echo $__env->yieldContent('messages'); ?>

                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown"
                                   href="#">
                                    <span
                                        class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo e(auth()->user()->name); ?></span>
                                    <img class="border rounded-circle img-profile"
                                         src="http://localhost:8000/dashboard_assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                          style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       href="<?php echo e(route('logout')); ?>">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php if(count($errors) > 0): ?>
                <?php echo e($errors); ?>

            <?php endif; ?>

            

            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © K.S.S 2021</span></div>
            </div>
        </footer>
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="<?php echo e(asset('dashboard_assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard_assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/chart.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="<?php echo e(asset('dashboard_assets/js/script.min.js')); ?>"></script>


<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/layouts/admin.blade.php ENDPATH**/ ?>
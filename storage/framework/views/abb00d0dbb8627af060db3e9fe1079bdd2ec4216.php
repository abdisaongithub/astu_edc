<?php $__env->startSection('header'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('messages'); ?>
    <?php if(count($messages) > 0): ?>


        <li class="nav-item dropdown no-arrow mx-1">
            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                       aria-expanded="false" data-toggle="dropdown"
                                                       href="#"><span
                        class="badge badge-danger badge-counter">7</span><i
                        class="fas fa-envelope fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-list animated--grow-in">

                    <h6 class="dropdown-header">Messages</h6>

                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                                       src="<?php echo e(asset('dashboard_assets/img/avatars/avatar4.jpeg')); ?>">
                                <div class="bg-success status-indicator"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate"><span><?php echo e($message->message); ?></span></div>
                                <p class="small text-gray-500 mb-0"><?php echo e($message->email); ?></p>
                            </div>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                 aria-labelledby="alertsDropdown"></div>
        </li>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

                <div class="container-fluid mt-4">

                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <span>Startups</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>
                                                    <?php if($startups): ?>
                                                        <?php echo e(@count($startups)); ?>

                                                    <?php else: ?>
                                                        No Startups Registered Yet
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-level-up-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                                <span>News Posted</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>
                                                    <?php if($news): ?>
                                                        <?php echo e(@count($news)); ?>

                                                    <?php else: ?>
                                                        No News Posted Yet
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Testimonials</span>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                                                        <span>
                                                            <?php if($testimonials): ?>
                                                                <?php echo e(@count($testimonials)); ?>

                                                            <?php else: ?>
                                                                No Testimonials Yet
                                                            <?php endif; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-pen-fancy fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                                <span>Team Members</span>
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>

                                                    <?php if($teams): ?>
                                                        <?php echo e(@count($teams)); ?>

                                                    <?php else: ?>
                                                        No Members Yet
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-group fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-secondary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1">
                                                <span>Partners</span>
                                            </div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <span>

                                                    <?php if($partners): ?>
                                                        <?php echo e(@count($partners)); ?>

                                                    <?php else: ?>
                                                        No Partners Yet
                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-group fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-5 p-5">
                    </div>
                    <div class="p-5">
                    </div>
                    <a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                            class="fas fa-angle-up"></i></a>
                </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdi\Documents\astu_edc_update\astu_edc\resources\views/dashboard/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>EDC Startups</h2>
                    <ol>
                        <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li>Startups</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <?php if(count($startups) > 0): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Active startups</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                         data-aos-duration="500">

                        <?php $__currentLoopData = $startups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $startup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 filter-app">
                                <div class="portfolio-item">
                                    <?php if($images): ?>
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                            <?php if($image->startup_id == $startup->id): ?>
                                                <img src="<?php echo e(Storage::url($image->image)); ?>" class="img-fluid" style="height: 200px; object-fit: contain" alt="">
                                                <?php break; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <div class="portfolio-info">
                                        <h3><a href="<?php echo e(route('startup_detail', $startup->id)); ?>"
                                            ><?php echo e($startup->name); ?><a
                                                    href="<?php echo e(route('startup_detail', $startup->id)); ?>"
                                                    title="Portfolio Details"><i
                                                        class="bx bx-link"></i></a></a></h3>
                                        <p class="description bg-light"><?php echo e($startup->detail); ?></p>
                                        <p class="description bg-light"></p>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>

                            <h3>No Startups found</h3>

                        <?php endif; ?>
                    </div>

            </div>

        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\x\htdocs\astu_edc\resources\views/startups.blade.php ENDPATH**/ ?>
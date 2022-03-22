<?php $__env->startSection('content'); ?>

    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Startup Details</h2>
                    <ol>
                        <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('startups')); ?>">Startups</a></li>
                        <li>Startup Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

    <?php if($startup): ?>
        <!-- ======= Portfolio Details Section ======= -->
            <section class="portfolio-details">
                <div class="container" >

                    <div class="portfolio-details-container">

                        <?php if($images): ?>
                            <div class="owl-carousel portfolio-details-carousel">
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(Storage::url($image->image)); ?>"  class="img-fluid" style="height: 600px; object-fit: contain;" alt="">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: <?php echo e($startup->category); ?></li>
                                <li><strong>Company</strong>: <?php echo e($startup->name); ?></li>

                                <li><strong>Address</strong>: <?php echo e($startup->location); ?></li>
                            </ul>
                        </div>

                    </div>

                    <div class="portfolio-description">
                        <h2>About <?php echo e($startup->name); ?></h2>
                        <p class="text-dark"><?php echo e($startup->detail); ?></p>
                    </div>
                </div>
            </section><!-- End Portfolio Details Section -->
        <?php endif; ?>
    </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdi\Documents\astu_edc_update\astu_edc\resources\views/startup_detail.blade.php ENDPATH**/ ?>
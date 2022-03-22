<?php $__env->startSection('content'); ?>

    <div class="pt-5 mt-4"></div>

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>News</h2>
                <ol>
                    <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                    <li>News</li>
                </ol>
            </div>

        </div>
    </section>


    <?php if(count($news) > 0): ?>
        <div class="container mb-5">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                 data-aos-duration="500">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="card mt-5 shadow">
                            <img src="<?php echo e(Storage::url($n->image)); ?>" class="img-thumbnail" alt="">
                            <div class="card-header">

                                <h4><?php echo e($n->title); ?></h4>

                            </div>
                            <div class="card-body">
                                <p class="description bg-light"><?php echo e($n->description); ?></p>

                                <a href="<?php echo e($n->link); ?>" target="_blank"><small class="link">more ...</small></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    <?php else: ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdi\Documents\astu_edc_update\astu_edc\resources\views/news.blade.php ENDPATH**/ ?>
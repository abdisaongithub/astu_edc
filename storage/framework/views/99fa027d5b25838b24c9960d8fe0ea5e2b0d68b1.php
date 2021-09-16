<?php $__env->startSection('content'); ?>


    <?php $__currentLoopData = $startups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $startup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($startup); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/startup/index.blade.php ENDPATH**/ ?>
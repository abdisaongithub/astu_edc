<?php $__env->startSection('header'); ?>

    <div class="row">
        <div class="col col-md-5 mr-2">
            Startup
        </div>
        <div class="col-md-6 ">
            <a href="<?php echo e(route('startup_create')); ?>" class="btn btn-sm btn-outline-success">Add Startup</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container p-5">
        <?php if(count($startups) > 0): ?>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $startups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $startup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($startup->name); ?></td>
                        <td><?php echo e($startup->description); ?></td>
                        <td><?php echo e($startup->email); ?></td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="<?php echo e(route('startup_edit', $startup->id)); ?>">Edit
                            </a>
                            <form class="d-inline" action="<?php echo e(route('startup_destroy', $startup->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger"
                                >Delete</button>
                            </form>
                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="row">
                <div class="col-md-6">
                    Not Startup Added Yet
                </div>
                <div class="col-md-6">
                    <a href="<?php echo e(route('startup_create')); ?>" class="btn btn-sm btn-outline-success">Add a Startup</a>
                </div>
            </div>
        <?php endif; ?>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdi\Documents\astu_edc_update\astu_edc\resources\views/dashboard/startup/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('header'); ?>

    <div class="row">
        <div class="col-md-4 mr-2">
            Teams
        </div>
        <div class="col">
            <a href="<?php echo e(route('team_create')); ?>" class="btn btn-sm btn-outline-success">Add a Team Member</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <div class="container p-5">
        <?php if(count($teams) > 0): ?>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($team->name); ?></td>
                        <td><?php echo e($team->position); ?></td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="<?php echo e(route('team_edit', $team->id)); ?>">Edit
                            </a>
                            <form class="d-inline" action="<?php echo e(route('team_destroy', $team->id)); ?>" method="post">
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
                    Not Testimonials Yet Created Yet
                </div>
                <div class="col-md-6">
                    <a href="<?php echo e(route('testimonial_create')); ?>" class="btn btn-sm btn-outline-success">Add a Testimonial</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/team/index.blade.php ENDPATH**/ ?>
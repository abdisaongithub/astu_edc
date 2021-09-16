<?php $__env->startSection('header'); ?>
    Team
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if($team): ?>
        <section class="contact-clean">
            <form method="post" action="<?php echo e(route('team_update', $team->id)); ?>">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <h2 class="text-center">Edit Team Member</h2><!-- Start: Success Example -->
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="<?php echo e($team->name); ?>" placeholder=" client Name">
                </div><!-- End: Success Example -->
                <!-- Start: Success Example -->
                <div class="form-group">
                    <!-- Start: Category --><input class="form-control" value="<?php echo e($team->position); ?>" type="text" name="position" placeholder="position" style="padding: 23px 12px;"><!-- End: Category -->
                </div>

                <div class="form-group">
                    <h6>Profile Picture</h6>
                    <input class="form-control-file" type="file" name="image">
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Update</button></div>
            </form>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/team/edit.blade.php ENDPATH**/ ?>
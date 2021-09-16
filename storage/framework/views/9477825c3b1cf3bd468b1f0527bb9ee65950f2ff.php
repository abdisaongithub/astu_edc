<?php $__env->startSection('content'); ?>
    <?php if($partner): ?>
        <section class="contact-clean">
            <form method="post" action="<?php echo e(route('partner_update', $partner->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <h2 class="text-center">Edit Partner</h2><!-- Start: Success Example -->
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder=" company Name" value="<?php echo e($partner->name); ?>">
                </div><!-- End: Success Example -->
                <!-- Start: Success Example -->
                <div class="form-group">
                    <!-- Start: Category --><input class="form-control" value="<?php echo e($partner->link); ?>" type="text" name="link" placeholder="web link" style="padding: 23px 12px;"><!-- End: Category -->
                </div>

                <div class="form-group">


                    <h6>Upload the company logo</h6>
                    <input class="form-control-file" type="file" name="image">

                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">ADD</button></div>
            </form>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Partner
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/partner/edit.blade.php ENDPATH**/ ?>
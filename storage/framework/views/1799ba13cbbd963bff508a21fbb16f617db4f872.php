<?php $__env->startSection('header'); ?>
    Mentor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="contact-clean">
        <form method="POST" action="<?php echo e(route('mentor_store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h2 class="text-center">Mentor</h2><!-- Start: Success Example -->
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Mentor Name">
            </div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="title" placeholder="Title" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="occupation" placeholder="Occupation" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="rank" placeholder="Rank" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>

            <div class="form-group">
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>

            <button class="btn btn-primary" type="submit">Post</button>
        </form>
    </section><!-- End: Contact Form Clean -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/mentor/create.blade.php ENDPATH**/ ?>
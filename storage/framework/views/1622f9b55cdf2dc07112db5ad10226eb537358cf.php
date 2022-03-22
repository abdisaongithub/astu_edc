<?php $__env->startSection('header'); ?>
    Testimonials
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="contact-clean">
        <form method="post" action="<?php echo e(route('testimonial_store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h2 class="text-center">Add New Testimonial</h2><!-- Start: Success Example -->
            <div class="form-group"><input class="form-control" type="text" name="name"
                                           placeholder=" client Name"></div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category --><input class="form-control" type="text" name="position" placeholder="position"
                                               style="padding: 23px 12px;"><!-- End: Category -->
            </div>

            <div class="form-group">
                <h6>content</h6>
                <textarea class="form-control" name="testimonial" placeholder="Message" rows="14"
                          style="padding: 23px 12px; margin-bottom: 10px;"></textarea>
                <h4>Photo of the client</h4>
                <input class="form-control-file" type="file" name="image">

            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">ADD</button>
            </div>
        </form>
    </section><!-- End: Contact Form Clean -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/testimonial/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <?php if($news): ?>
        <section class="contact-clean">
            <form method="POST" action="<?php echo e(route('news_update', $news->id)); ?>" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <h2 class="text-center">Update a News Post</h2><!-- Start: Success Example -->
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="<?php echo e($news->title); ?>">
                </div><!-- End: Success Example -->
                <!-- Start: Success Example -->
                <div class="form-group">
                    <!-- Start: Category -->
                    <input class="form-control" type="text" name="link" value="<?php echo e($news->link); ?>"
                           style="padding: 23px 12px;">
                    <!-- End: Category -->
                </div>

                <div class="form-group">
                    <h6>Content</h6>
                    <textarea class="form-control" name="description" placeholder="Message" rows="14"
                              style="padding: 23px 12px; margin-bottom: 10px;"><?php echo e($news->description); ?></textarea>
                    <h5>Add image</h5>
                    <input class="form-control-file" type="file" name="image">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </section><!-- End: Contact Form Clean -->
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/news/edit.blade.php ENDPATH**/ ?>
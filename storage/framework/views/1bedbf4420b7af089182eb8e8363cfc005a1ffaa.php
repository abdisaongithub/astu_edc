<?php $__env->startSection('content'); ?>
    <?php echo e($startup); ?>

    <?php if($startup): ?>
    <section class="contact-clean">
        <form method="post" action="<?php echo e(route('startup_update', $startup->id)); ?>">
            <input type="hidden" name="_method" value="put">
            <?php echo csrf_field(); ?>
            <h2 class="text-center">Edit Startup</h2><!-- Start: Success Example -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo e($startup->name); ?>"></div><!-- End: Success Example -->
                    <!-- Start: Success Example -->
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="category" placeholder="Category" value="<?php echo e($startup->category); ?>" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo e($startup->email); ?>"  ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="web" name="website" placeholder="Website" value="<?php echo e($startup->website); ?>"  ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo e($startup->phone); ?>" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="location" placeholder="Address" value="<?php echo e($startup->location); ?>" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="slogan" placeholder="Slogan" value="<?php echo e($startup->slogan); ?>" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="detail" placeholder="Short Description" value="<?php echo e($startup->detail); ?>" ><!-- End: Category -->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h6>Description</h6>
                <textarea class="form-control"  name="description" placeholder="Description in Detail" rows="14" style="padding: 23px 12px; margin-bottom: 10px;"><?php echo e($startup->description); ?></textarea>
                <h4>Add some photos for the startup</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" type="file">
                        <input class="form-control-file mb-2" type="file">
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" type="file">
                        <input class="form-control-file mb-2" type="file">
                    </div>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Update</button></div>
        </form>
    </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Startup
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/abdi/dev/laravel/astu_edc/resources/views/dashboard/startup/edit.blade.php ENDPATH**/ ?>
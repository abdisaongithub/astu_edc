<?php $__env->startSection('content'); ?>

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo e(asset('img/edc2.jpg')); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3></h3>
                        <p class="pl-4 pr-4">  ASTU Entraprenurship Development Center is a non academic program aiming to develop bussines
                            and entraprenural skills of students in adama science and technology university.</br>
                            ASTU-EDC is set up to provide bussines incubation program and technology transfer initiative
                            for various youth students , innovative individuals and SMEs in the multideciplinary areas
                            of science and technology on behalf of Adama Science And Technology University(ASTU).</p>
                        <p class="pl-4 pr-4" >
                            Scince its establishment in 2015, EDC has provided services to
                            students,staffs,MSMES,communities and individuals and aims to eastablish best practice on
                            entrapreurship development and incubation program and to create innovate and sustainable
                            start up bussines.More than 3000 individuals benefited from EDC training and incubation
                            services.

                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo e(asset('img/edc3.jpg')); ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                                <p class="card-text">The mission of ASTU-EDC is to create and develop technology and innovation-based businesses needed for developing industries and the society by providing the knowledge, support and technical services. The Center is meant to create entrepreneurship culture and develop entrepreneurship eco-system in the community to support the socio–economic development of the nation</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo e(asset('img/edc1.jpg')); ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                                <p class="card-text">
                                    Commence annual based business plan competitions <br/>
                                    Train and develop start-ups <br>
                                    Provide technology-based business incubation related services to the community<br>
                                    Build network; commercialize research ideas and innovations that are developed in the R&D facilities of the Universities<br>
                                    Support local governments, MSEs and other actors in incubation related activities<br>
                                    Improve the livelihood and survival rate of new firms by providing technical and business-related support<br>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php echo e(asset('img/hero-bg-1.jpg')); ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                                <p class="card-text">To become one of the leading EDCs in Ethiopia, become top technology and business incubation center, and renown in the region and nationwide by 2025 </p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Service Details Section -->

        <?php if(count($teams) > 0): ?>
            <section class="team">
                <div class="container">
                    <h3>Our Team</h3>
                    <div class="row">

                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="<?php echo e(Storage::url($team->image)); ?>" class="img-fluid" style="height: 200px;  width: 200px; object-fit: contain;" alt="">







                                    </div>
                                    <div class="member-info">
                                        <h4><?php echo e($team->name); ?></h4>
                                        <span><?php echo e($team->position); ?></span>
                                        <?php if(auth()->guard()->guest()): ?>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('team_edit', $team->id)); ?>"
                                               class="btn btn-sm btn-outline-info mt-2">
                                                Edit
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </section>
    <?php endif; ?>

        <?php if($testimonials): ?>
    <!-- ======= Tetstimonials Section ======= -->
        <section class="testimonials" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Tetstimonials</h2>

                </div>

                <div class="owl-carousel testimonials-carousel">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="testimonial-item">
                        <img src="<?php echo e(Storage::url($test->image)); ?>" class="testimonial-img" alt="">
                        <h3><?php echo e($test->name); ?></h3>
                        <h4><?php echo e($test->position); ?></h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?php echo e($test->testimonial); ?>

                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <a href="<?php echo e(route('testimonial_edit', $test->id)); ?>"
                               class="btn btn-sm btn-outline-info mt-2">
                                Edit
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
        </section><!-- End Ttstimonials Section -->
        <?php endif; ?>
    </main><!-- End #main -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\x\htdocs\astu_edc\resources\views/about.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>ASTU-EDC</span></h2>
                    <p class="animate__animated animate__fadeInUp"><strong>“ The best way to predict the future is to
                            create
                            it. ”</strong></p>

                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"></h2>
                    <p class="animate__animated animate__fadeInUp indented">
                    <strong>
                        ASTU-EDC is set up to provide bussines incubation
                        program
                        and technology transfer initiative for various youth students , innovative individuals and SMEs
                        in
                        the multideciplinary areas of
                        science and technology on behalf of Adama Science And Technology University(ASTU).
                    </strong>
                    </p>

                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><span>ASTU-EDC</span></h2>
                    <p class="animate__animated animate__fadeInUp">
                    <strong>"One solution for business education"</strong>
                    </p>

                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->


    <main id="main">

        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>We provide intensive training and incubation services in collaboration with our partner EDC
                        Ethiopia
                        and other partners.</p>

                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Training</h3>
                        <ul>
                            <li><i class="icofont-check"></i> <strong> Enterprenurship Training
                                    Workshop(ETW):</strong></br>
                                a 6 day intensive non-residential programme.This is a practical and hands-on programme.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Youth Entrepreneurship
                                    Training(YET):</strong></br>
                                a 2-day self-impoloyment and atitude development training programme for students.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Women Entrepreneurship
                                    Training(WET):</strong></br>
                                a 2-day training which addresses the needs of female students and women enterpreneurs.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Holistic Business Idea Development:</strong></br>
                                a day of intensive training focusing on how to establish own business idea and learn to
                                sell it.
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Business Incubation</h3>
                        <p class="font-italic">
                        <ul>
                            <li><i class="icofont-check"></i><strong> Helps with accounting/financial management
                                </strong></li>
                            <li><i class="icofont-check"></i><strong> Helps with marketing and market research.</strong>
                            </li>
                            <li><i class="icofont-check"></i><strong> Helps with human resource management and business
                                    operation.</strong></li>

                            <li><i class="icofont-check"></i><strong> Prototype development supports.</strong></li>
                            <li><i class="icofont-check"></i><strong>Technology Commercialization
                                    assistance.</strong></i>
                            </li>
                        </ul>
                        </p>

                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="img/features-4.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Access To Resources</h3>
                        <ul>
                            <li><i class="icofont-check"></i> <strong>Access to internet services and working
                                    space.</strong></i>
                            </li>
                            <li><i class="icofont-check"></i> <strong>Links to university resources.</strong></i>
                            </li>
                            <li><i class="icofont-check"></i> <strong>Links to strategic partners.</strong></i>
                            </li>
                            <li><i class="icofont-check"></i> <strong>Coaching and membership services.</strong></i>
                            </li>
                            <li><i class="icofont-check"></i> <strong>Business idea competition.</strong></i>
                            </li>
                            <li><i class="icofont-check"></i> <strong>Experience and knowledge sharin forum and
                                    networking
                                    sessions.</strong></i> </li>


                        </ul>
                    </div>
                </div>


            </div>
        </section>

        <section class="latest"></section>


        <?php if(count($news) > 0): ?>
            <div class="section-title">
                <h2>Latest News</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 img-box bg-dark">
                        <img src="<?php echo e(Storage::url($news->last()->image)); ?>" style="object-fit: cover;" class="img-fluid"
                             alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5 bg-secondary">

                        <div class="icon-box">

                            <h4 class="title-news"><?php echo e($news->last()->title); ?></h4>
                            <p class="news-description"> <?php echo e($news->last()->description); ?> </p>
                            <a href="<?php echo e($news->last()->link); ?>" target="_blank">see more?</a>

                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>

        <?php if(count($startups) > 0): ?>
            <section class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>Some Of Our Startups</h2>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $startups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $startup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                                <div class="icon-box icon-box-cyan">
                                    <a href="<?php echo e(route('startup_detail', $startup->id)); ?>">
                                        
                                        <?php if(count($startups_images) > 0): ?>
                                            <?php $__currentLoopData = $startups_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($image->startup_id == $startup->id): ?>
                                                    <img class="card-img-top"
                                                         src="<?php echo e(Storage::url($image->image)); ?>">
                                                    <?php break; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </a>
                                    <h4 class="title"><a
                                            href="<?php echo e(route('startup_detail', $startup->id)); ?>"><?php echo e($startup->name); ?></a>
                                    </h4>
                                    <?php echo e($startup->email); ?>

                                    <br>
                                    <a href="https://<?php echo e($startup->website); ?>" target="_blank">Website &neArr;</a>
                                    </p>
                                    <?php if(auth()->guard()->guest()): ?>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('startup_edit', $startup->id)); ?>"
                                           class="btn btn-sm btn-outline-info mt-2">
                                            Edit
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($loop->index == 5) break; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </section><!-- End Services Section -->
            <!--dont forget partners section-->
        <?php endif; ?>

        <?php if($mentors): ?>
        <!-- ======= Tetstimonials Section ======= -->
            <section class="testimonials" data-aos="fade-up">
                <div class="container">

                    <div class="section-title">
                        <h2>Mentors</h2>
                    </div>

                    <div class="owl-carousel testimonials-carousel">
                        <?php $__currentLoopData = $mentors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="testimonial-item">
                                <img src="<?php echo e(Storage::url($mentor->image)); ?>" class="testimonial-img" alt="">
                                <h3><?php echo e($mentor->name); ?></h3>
                                <h4><?php echo e($mentor->position); ?></h4>
                                <h5><?php echo e($mentor->rank); ?></h5>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?php echo e($mentor->title); ?>

                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <?php if(auth()->guard()->guest()): ?>
                                <?php else: ?>
                                    <a href="<?php echo e(route('mentor_edit', $mentor->id)); ?>"
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

        <?php if(count($partners) > 0): ?>
            <div class="section">
                <div class="container">
                <div class="section-title">
                        <h2>Our Partners</h2>
                    </div>
                    <div class="row">

                        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-2 mr-3">
                                <img src="<?php echo e(Storage::url($partner->image)); ?>" class="testimonial-img p-2"
                                     style="height: 200px;  width: 200px; object-fit: contain;"
                                >
                                </br>

                                <a href="<?php echo e($partner->link == null ? '#' : $partner->link); ?>" target="_blank"><h4
                                        class="title"><?php echo e($partner->name); ?></h4></a>
                                

                                <?php if(auth()->guard()->guest()): ?>
                                <?php else: ?>
                                    <a href="<?php echo e(route('partner_edit', $partner->id)); ?>"
                                       class="btn btn-sm btn-outline-info my-2">
                                        Edit
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdi\Documents\astu_edc_update\astu_edc\resources\views/welcome.blade.php ENDPATH**/ ?>
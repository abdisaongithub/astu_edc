<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="icon" href="<?php echo e(URL::asset('/img/logo.png')); ?>" type="image/x-icon"/>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ASTU-EDC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/aos/aos.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('headers'); ?>

</head>
<body>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light">
                <a href="<?php echo e(route('welcome')); ?>"><span><img src="<?php echo e(asset('img/logo.png')); ?>" class="img-fluid" />  ASTU-EDC</span></a></h1>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li
                    <?php if(Route::is('welcome')): ?>
                    class="active"
                    <?php endif; ?>
                >
                    <a href="<?php echo e(route('welcome')); ?>">Home</a>
                </li>
                <li
                    <?php if(Route::is('services')): ?>
                    class="active"
                    <?php endif; ?>
                ><a href="<?php echo e(route('services')); ?>">Services</a></li>
                <li
                    <?php if(Route::is('startups') || Route::is('startup_detail')): ?>
                    class="active"
                    <?php endif; ?>
                ><a href="<?php echo e(route('startups')); ?>">Startups</a></li>

                
                

                <li
                    <?php if(Route::is('about')): ?>
                    class="active"
                    <?php endif; ?>
                ><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                <li
                    <?php if(Route::is('contact')): ?>
                    class="active"
                    <?php endif; ?>
                ><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>

                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                    <li><a href="<?php echo e(route('dashboard_index')); ?>">Dashboard</a></li>
                <?php endif; ?>

                <li   <?php if(Route::is('news')): ?>
                      class="active drop-down"
                      <?php else: ?>
                      class="drop-down"
                      <?php endif; ?>
                ><a href="">News</a>

                    <ul>
                        <li><a href="<?php echo e(route('news')); ?>">Latest News</a></li>

                        <li><a href="https://www.edcethiopia.org/index.php/en/news/publications" target="_blank">Publications</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<main>

    <?php echo $__env->yieldContent('content'); ?>

</main>

</div>

<!-- Vendor JS Files -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/venobox/venobox.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/counterup/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>


<script src="<?php echo e(asset('js/main.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links pl-5 mr-5">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('welcome')); ?>">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('about')); ?>">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('contact')); ?>">Contact us</a></li>
                        

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('services')); ?>">Business and Entrepreneurship training</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('services')); ?>">Holistic Business Idea Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('services')); ?>">Business Incubation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('services')); ?>">Access to funding for startups</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e(route('services')); ?>">Access to resources for startups</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact" id="footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Adama Science and Technology University <br>
                        Oromia, Adama, Ethiopia <br><br>
                        <strong>Phone:</strong> <a href="tel:+251-22-211-1948" target="-_blank"> +251-22-211-1948 </a> <br>
                        <strong>Email:</strong> <a href="mail:edc@astu.edu.et" target="_blank">edc@astu.edu.et</a><br>
                        
                    </p>
                    <div class="social-links mt-3">
                        <a href="https://t.me/ASTUEDC" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
                        <a href="https://www.facebook.com/astuedc" target="_blank" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://instagram.com/astu_edc?utm_medium=copy_link" target="_blank" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCXkzaEDbNGziaCpCIaInVPA" target="_blank" class="youtube"><i
                                class="bx bxl-youtube"></i></a>

                    </div>
                </div>

                

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>ASTU-EDC</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            Powered by <a href="https://www.linkdin.com/in/daniel-muleta-23653621b" target="_blank">Hamilee technologies</a>

        </div>
    </div>
</footer><!-- End Footer -->

</body>
</html>
<?php /**PATH C:\x\htdocs\astu_edc\resources\views/layouts/app.blade.php ENDPATH**/ ?>
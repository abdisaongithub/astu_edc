<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ASTU-EDC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>
<body>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="{{ route('welcome') }}"><span>EDC</span></a></h1>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('startups') }}">Startups</a></li>
                <li><a href="club.html">EIC Club</a></li>
                <li class="drop-down"><a href="">News</a>
                    <ul>
                        <li><a href="#">Latest News</a></li>

                        <li><a href="https://www.edcethiopia.org/index.php/en/news/publications">Publications</a></li>

                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
<!-- End Header -->

<main>

    @yield('content')

</main>

</div>

<!-- Vendor JS Files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>
<script src="vendor/venobox/venobox.min.js"></script>
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/counterup/counterup.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/aos/aos.js"></script>


<script src="js/main.js"></script>


<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="contact.html">contact us</a></li>

                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Business and entraprenurship training</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Holistic Business Idea Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Business Incubation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Access to funding for startups</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Access to resources for startups</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Bole, Adama Science And Technology University <br>
                        Oromia, Adama<br>
                        Ethiopia <br><br>
                        <strong>Phone:</strong> +251-912-773-535 <br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About EDC</h3>
                    <p>Our main goal is to help create and grow young technology and inovation-based bussines needed for
                        developing Ethiopian Industries by technical services and connections, and by creating
                        enterprenurship culture in the university eco-system in the community. specifically, aims to
                        inhance and nurture innovation,creative thinking skills, and work skills of students and thereby
                        develop good social relevant projects and to
                        prototype them and help them find the fundeing needed from govenrment or private sources to
                        start or help them to be good innovators and enterprenurs.
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

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

            Powered by <a href="">Kuta Software Solutions</a>

        </div>
    </div>
</footer><!-- End Footer -->

</body>
</html>

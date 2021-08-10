<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ URL::asset('/img/logo.png') }}" type="image/x-icon"/>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ASTU-EDC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('headers')

</head>
<body>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light">
                <a href="{{ route('welcome') }}"><span><img src="{{ asset('img/logo.png') }}" class="img-fluid" />  ASTU-EDC</span></a></h1>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li
                    @if(Route::is('welcome'))
                    class="active"
                    @endif
                >
                    <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li
                    @if(Route::is('services'))
                    class="active"
                    @endif
                ><a href="{{ route('services') }}">Services</a></li>
                <li
                    @if(Route::is('startups') || Route::is('startup_detail'))
                    class="active"
                    @endif
                ><a href="{{ route('startups') }}">Startups</a></li>

                {{--                <li><a href="club.html">EIC Club</a></li>--}}
                {{-- TODO: To be added after the completion of the club's website --}}

                <li
                    @if(Route::is('about'))
                    class="active"
                    @endif
                ><a href="{{ route('about') }}">About Us</a></li>
                <li
                    @if(Route::is('contact'))
                    class="active"
                    @endif
                ><a href="{{ route('contact') }}">Contact Us</a></li>

                @guest
                @else
                    <li><a href="{{ route('dashboard_index') }}">Dashboard</a></li>
                @endguest

                <li   @if(Route::is('news'))
                      class="active drop-down"
                      @else
                      class="drop-down"
                      @endif
                ><a href="">News</a>

                    <ul>
                        <li><a href="{{ route('news') }}">Latest News</a></li>

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

    @yield('content')

</main>

</div>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>


<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('dashboard_index') }}">Admins Area</a></li>

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
                        Adama Science and Technology University <br>
                        Oromia, Adama, Ethiopia <br><br>
                        <strong>Phone:</strong> <a href="tel:+251-22-211-1948" target="-_blank"> +251-22-211-1948 </a> <br>
                        <strong>Email:</strong> <a href="mail:edc@astu.edu.et" target="_blank">edc@astu.edu.et</a><br>
                        {{--TODO: Replace email by email from edc domain--}}
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

            Powered by <a href="t.me/abd_dba" target="_blank">Kuta Software Solutions</a>

        </div>
    </div>
</footer><!-- End Footer -->

</body>
</html>

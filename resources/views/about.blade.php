@extends('layouts.app')

@section('content')

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="img/edc2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3></h3>
                        <p>
                            ASTU Entraprenurship Development Center is a non academic program aiming to develop bussines
                            and entraprenural skills of students in adama science and technology university.</br>
                            ASTU-EDC is set up to provide bussines incubation program and technology transfer initiative
                            for various youth students , innovative individuals and SMEs in the multideciplinary areas
                            of
                            science and technology on behalf of Adama Science And Technology University(ASTU).</br></br>
                            Our main goal is to help create and grow young technology and inovation-based bussines
                            needed for developing Ethiopian Industries by technical serviices and connections, and by
                            creating
                            enterprenurship culture in the university eco-system in the community. specifically, aims to
                            inhance and nurture innovation,creative thinking skills, and work skills of students and
                            thereby develop good social relevant projects and to
                            prototype them and help them find the fundeing needed from govenrment or private sources to
                            start or help them to be good innovators and enterpreneurs.
                            </br>
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
                                <img src="img/edc3.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/edc1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/service-details-3.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit,
                                    sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Service Details Section -->

        @if($teams)
            <section class="team">
                <div class="container">
                    <h3>Our Team</h3>
                    <div class="row">

                        @foreach($teams as $team)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="{{ $team->image }}" class="img-fluid" alt="">
                                        <div class="social">

                                            <a href=""><i class="icofont-twitter"></i></a>
                                            <a href=""><i class="icofont-facebook"></i></a>
                                            <a href=""><i class="icofont-telegram"></i></a>
{{--                                            TODO: complete the socials after checking if link is available--}}
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $team->name }}</h4>
                                        <span>{{ $team->position }}</span>
                                        @guest
                                        @else
                                            <a href="{{ route('team_edit', $team->id) }}"
                                               class="btn btn-sm btn-outline-info mt-2">
                                                Edit
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
    @endif

        @if($testimonials)
    <!-- ======= Tetstimonials Section ======= -->
        <section class="testimonials" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Tetstimonials</h2>

                </div>

                <div class="owl-carousel testimonials-carousel">
                    @foreach($testimonials as $test)
                    <div class="testimonial-item">
                        <img src="{{ $test->image }}" class="testimonial-img" alt="">
                        <h3>{{ $test->name }}</h3>
                        <h4>{{ $test->position }}</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $test->testimonial }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        @guest
                        @else
                            <a href="{{ route('testimonial_edit', $test->id) }}"
                               class="btn btn-sm btn-outline-info mt-2">
                                Edit
                            </a>
                        @endif
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Ttstimonials Section -->
        @endif
    </main><!-- End #main -->

@endsection


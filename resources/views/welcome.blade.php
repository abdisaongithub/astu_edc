@extends('layouts.app')

@section('content')

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
                    <p class="animate__animated animate__fadeInUp">ASTU-EDC is set up to provide bussines incubation
                        program
                        and technology transfer initiative for various youth students , innovative individuals and SMEs
                        in
                        the multideciplinary areas of
                        science and technology on behalf of Adama Science And Technology University(ASTU).
                    </p>
                    |
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"></h2>
                    <p class="animate__animated animate__fadeInUp">Our main goal is to help create and grow young
                        technology
                        and inovation-based bussines needed for developing Ethiopian Industries by technical services
                        and
                        connections, and by creating
                        enterprenurship culture in the university eco-system in the community. specifically, aims to
                        inhance
                        and nurture innovation,creative thinking skills, and work skills of students and thereby develop
                        good social relevant projects and to
                        prototype them and help them find the fundeing needed from govenrment or private sources to
                        start or
                        help them to be good innovators and enterprenurs.
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
                            <li><i class="icofont-check"></i> <strong>Youth Enterprenurship Training(YET):</strong></br>
                                a 2-day self-impoloyment and atitude development training programme for students.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Women Enterprenurship Training(WET):</strong></br>
                                a 2-day training which addreses the needs of female students and women enterpreneurs.
                            </li>
                            <li><i class="icofont-check"></i> <strong>Holistic Business Idea Development:</strong></br>
                                a day of intensive training focusing on how to eastablish own business idea and learn to
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
                            <li><i class="icofont-check"></i> <strong>Links to university resources.</strong></i>
                            <li><i class="icofont-check"></i> <strong>Links to strategic partners.</strong></i>
                            <li><i class="icofont-check"></i> <strong>Coaching and membership services.</strong></i>
                            <li><i class="icofont-check"></i> <strong>Business idea competition.</strong></i>
                            <li><i class="icofont-check"></i> <strong>Experience and knowledge sharin forum and
                                    networking
                                    sessions.</strong></i>


                        </ul>
                    </div>
                </div>


            </div>
        </section>

        <section class="latest"></section>

        <div class="section-title">
            <h2>Latest News</h2>
        </div>

        @if($news)
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 img-box bg-dark">
                        <img src="{{ $news[0]->image }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5 bg-secondary">

                        <div class="icon-box">

                            <h4 class="title-news">{{ $news[0]->title}}</h4>
                            <p class="news-description"> {{ $news[0]->description }} </p>
                            <a href="https://{{ $news[0]->link }}">see more?</a>
                        </div>
                    </div>
                </div>

            </div>
        @endif

        @if($startups)
            <section class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>Some Of Our Startups</h2>
                    </div>
                    <div class="row">
                        @foreach($startups as $startup)
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
                                <div class="icon-box icon-box-cyan">
                                    <a href="{{ route('startup_detail') }}">
                                        {{-- TODO: make this route for the details of each startups--}}
                                        <img class="card-img-top"
                                             src="{{ $startup->image == null ? 'img/portfolio/portfolio-5.jpg' : $startup->image }}"
                                             alt="">
                                    </a>
                                    <h4 class="title"><a href="{{ route('startup_detail') }}">{{ $startup->name }}</a>
                                    </h4>
                                    {{-- TODO: make this route for the details of each startups--}}
                                    <p class="description bg-light">
                                        {{ $startup->description }}</br>
                                        {{ $startup->email }} <br>
                                        <a href="https://{{ $startup->website }}" target="_blank">Website &neArr;</a>
                                    </p>
                                    @guest
                                    @else
                                        <a href="{{ route('startup_edit', $startup->id) }}"
                                           class="btn btn-sm btn-outline-info mt-2">
                                            Edit
                                        </a>
                                    @endif
                                </div>
                            </div>
                            @break($loop->index == 5)
                        @endforeach

                    </div>

                </div>
            </section><!-- End Services Section -->
            <!--dont forget partners section-->
        @endif

        @if($partners)
            <div class="section">
                <div class="container">
                    <h3>Our Partners</h3>
                    <div class="row">

                        @foreach($partners as $partner)
                            <div class="col-lg-2 mr-3">
                                <img src="{{ $partner->image }}" class="testimonial-img" style="height: 200px"
                                     alt="{{ $partner->description == null ? '' : $partner->description  }}"></br>

                                <a href="{{ $partner->link == null ? '#' : $partner->link }}" target="_blank"><h4
                                        class="title">{{ $partner->name }}</h4></a>
                                {{--                        TODO: Clearup where links are displayed and replace full links in database--}}

                                @guest
                                @else
                                    <a href="{{ route('partner_edit', $partner->id) }}"
                                       class="btn btn-sm btn-outline-info my-2">
                                        Edit
                                    </a>
                                @endif
                            </div>


                        @endforeach

                    </div>
                </div>
            </div>
        @endif
    </main><!-- End #main -->

@endsection

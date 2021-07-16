@extends('layouts.app')

@section('content')

    <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>EDC Startups</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>startups</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Active startups</li>

                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="portfolio-item">
                            <img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1">Kuta Software Solutions <a href="{{ route('startup_detail') }}" title="Portfolio Details"><i class="bx bx-link"></i></a></a></h3>
                                <p class="description bg-light" >Software development startup that provides software solutions for bussineses and companies.</br>
                                    phone number:0994926782
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 filter-web">
                        <div class="portfolio-item">
                            <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3">Core Machinaries <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a></a></h3>
                                <p class="description bg-light" >Our company produces agricultural machineries, woodwork furniture machineries,construction machineries and others.</br>
                                    phone number: 0940238813</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="portfolio-item">
                            <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2">Bamgoo <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a></a></h3>
                                <p class="description bg-light" >We design and build bicycle from bamboo tree.</br>
                                    phone number:0943014704</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="portfolio-item">
                            <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2">ABA CHEMICALS <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a></a></h3>
                                <p class="description bg-light" >
                                    A.B.A chemicals produces organic laundary soap from epidemic plants and essentials oils.</br>
                                    email:kennabekele94@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="portfolio-item">
                            <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3><a href="img/portfolio/  -3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2">Halib<a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a> </a></h3>
                                <p class="description bg-light" >
                                    Halib produces chemicals tooth paste from indigeneous plants.</br>
                                    email:Halibtoothpaste1@gmail.com
                                </p>

                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@endsection

@extends('layouts.app')

@section('content')

    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Startup Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio.html">startup</a></li>
                        <li>Startup Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="img/kuta.png" class="img-fluid" alt="">
                        <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <img src="img/kuta.png" class="img-fluid" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Software Development</li>
                            <li><strong>company</strong>:Kuta Software Solutions</li>

                            <li><strong>addres</strong>: Adama,shewa,Oromia</li>
                        </ul>
                    </div>

                </div>

                <div class="portfolio-description">
                    <h2>About K.S.S</h2>
                    <p class="text-dark">
                        A software development startup currently working on the production and development
                        of Enterprise resource planing softwares,simplififed e-procurement sytems, clinic management
                        systems,inventory management systems for Factories,business software solutions and mobile applications</p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection

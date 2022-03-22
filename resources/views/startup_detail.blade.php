@extends('layouts.app')

@section('content')

    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Startup Details</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('startups') }}">Startups</a></li>
                        <li>Startup Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

    @if($startup)
        <!-- ======= Portfolio Details Section ======= -->
            <section class="portfolio-details">
                <div class="container" >

                    <div class="portfolio-details-container">

                        @if($images)
                            <div class="owl-carousel portfolio-details-carousel">
                                @foreach($images as $image)
                                    <img src="{{ Storage::url($image->image) }}"  class="img-fluid" style="height: 600px; object-fit: contain;" alt="">
                                @endforeach
                            </div>
                        @endif

                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: {{ $startup->category }}</li>
                                <li><strong>Company</strong>: {{ $startup->name }}</li>

                                <li><strong>Address</strong>: {{ $startup->location }}</li>
                            </ul>
                        </div>

                    </div>

                    <div class="portfolio-description">
                        <h2>About {{ $startup->name }}</h2>
                        <p class="text-dark">{{ $startup->detail }}</p>
                    </div>
                </div>
            </section><!-- End Portfolio Details Section -->
        @endif
    </main><!-- End #main -->

@endsection

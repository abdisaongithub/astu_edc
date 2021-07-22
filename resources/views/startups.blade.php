@extends('layouts.app')

@section('content')

    <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>EDC Startups</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Startups</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                @if($startups)
                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Active startups</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                         data-aos-duration="500">

                        @foreach($startups as $startup)
                            <div class="col-lg-4 col-md-6 filter-app">
                                <div class="portfolio-item">
                                    @if($images)
                                        @foreach($images as $image){
                                            @if($image->startup_id == $startup->id)
                                                <img src="{{ Storage::url($image->image) }}" class="img-fluid" alt="">
                                                @break
                                            @endif
                                        @endforeach
                                    @endif
                                    <div class="portfolio-info">
                                        <h3><a href="{{ route('startup_detail', $startup->id) }}"
                                            >{{ $startup->name }}<a
                                                    href="{{ route('startup_detail', $startup->id) }}"
                                                    title="Portfolio Details"><i
                                                        class="bx bx-link"></i></a></a></h3>
                                        <p class="description bg-light">{{ $startup->detail }}</p>
                                        <p class="description bg-light"></p>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @else

                            <h3>No Startups found</h3>

                        @endif
                    </div>

            </div>

        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@endsection

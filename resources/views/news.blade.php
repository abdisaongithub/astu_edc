@extends('layouts.app')

@section('content')

    <div class="pt-5 mt-4"></div>

    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>News</h2>
                <ol>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>News</li>
                </ol>
            </div>

        </div>
    </section>


    @if(count($news) > 0)
        <div class="container mb-5">
            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                 data-aos-duration="500">
                @foreach($news as $n)
                    <div class="col-lg-4 col-md-6 filter-app">
                        <div class="card mt-5 shadow">
                            <img src="{{ Storage::url($n->image) }}" class="img-thumbnail" alt="">
                            <div class="card-header">

                                <h4>{{ $n->title }}</h4>

                            </div>
                            <div class="card-body">
                                <p class="description bg-light">{{ $n->description }}</p>

                                <a href="{{ $n->link }}" target="_blank"><small class="link">more ...</small></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    @else
    @endif

@endsection

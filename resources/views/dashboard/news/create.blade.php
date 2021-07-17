@extends('layouts.admin')

@section('header')
    News
@endsection

@section('content')

    <section class="contact-clean">
        <form method="POST" action="{{ route('news_store') }}">
            @csrf
            <h2 class="text-center">News Post</h2><!-- Start: Success Example -->
            <div class="form-group">
                <input class="form-control" type="text" name="title" placeholder="News Title">
            </div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="link" placeholder="web link" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>

            <div class="form-group">
                <h6>Content</h6>
                <textarea class="form-control"  name="description" placeholder="Message" rows="14" style="padding: 23px 12px; margin-bottom: 10px;"></textarea>
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>
            <button class="btn btn-primary" type="submit">Post</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection

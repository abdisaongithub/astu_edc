@extends('layouts.admin')

@section('header')
    Testimonials
@endsection

@section('content')

    <section class="contact-clean">
        <form method="post" action="{{ route('testimonial_store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">ADD New Testimonial</h2><!-- Start: Success Example -->
            <div class="form-group"><input class="form-control" type="text" name="name"
                                           placeholder=" client Name"></div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category --><input class="form-control" type="text" name="position" placeholder="position"
                                               style="padding: 23px 12px;"><!-- End: Category -->
            </div>

            <div class="form-group">
                <h6>content</h6>
                <textarea class="form-control" name="testimonial" placeholder="Message" rows="14"
                          style="padding: 23px 12px; margin-bottom: 10px;">

                            </textarea>
                <h4>Photo of the client</h4>
                <input class="form-control-file" type="file" name="image">

            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">ADD</button>
            </div>
        </form>
    </section><!-- End: Contact Form Clean -->
@endsection

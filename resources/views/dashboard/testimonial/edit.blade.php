@extends('layouts.admin')

@section('header')
    Testimonial
@endsection

@section('content')
    @if($testimonial)

        <section class="contact-clean">
            <form method="post" action="{{ route('testimonial_update', $testimonial->id) }}">
                @method('put')
                @csrf
                <h2 class="text-center">Edit Testimonial</h2><!-- Start: Success Example -->
                <div class="form-group"><input class="form-control" type="text" name="name" value="{{ $testimonial->name }}" placeholder=" client Name"></div><!-- End: Success Example -->
                <!-- Start: Success Example -->
                <div class="form-group">
                    <!-- Start: Category --><input class="form-control" type="text" name="position" value="{{ $testimonial->position }}" placeholder="position"
                                                   style="padding: 23px 12px;"><!-- End: Category -->
                </div>

                <div class="form-group">
                    <h6>content</h6>
                    <textarea class="form-control" name="testimonial" placeholder="Message" rows="14"
                              style="padding: 23px 12px; margin-bottom: 10px;">{{ $testimonial->testimonial }}</textarea>
                    <h4>Photo of the client</h4>
                    <input class="form-control-file" type="file" name="image">

                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

            </form>
        </section>
    @endif
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Dashboard</h3>
        </div>
    </div><!-- Start: Contact Form Clean -->
    <section class="contact-clean">
        <form method="post">
            <h2 class="text-center">News Post</h2><!-- Start: Success Example -->
            <div class="form-group"><input class="form-control" type="text" name="Title" placeholder="News Title"></div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">

                <!-- Start: Category --><input class="form-control" type="text" name="web-link" placeholder="web link" style="padding: 23px 12px;"><!-- End: Category -->
            </div>

            <div class="form-group">
                <h6>content</h6>
                <textarea class="form-control"  name="message" placeholder="Message" rows="14" style="padding: 23px 12px; margin-bottom: 10px;">

                            </textarea>
                <h4>Add image</h4>
                <input class="form-control-file" type="file">

            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">post</button></div>
        </form>
    </section><!-- End: Contact Form Clean -->
    </div>
@endsection

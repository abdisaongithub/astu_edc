@extends('layouts.admin')

@section('header')
    Startup
@endsection


@section('content')
    <section class="contact-clean">
        <form method="post" action="{{ route('startup_store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">ADD New Startup</h2><!-- Start: Success Example -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div><!-- End: Success Example -->
                    <!-- Start: Success Example -->
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="category" placeholder="Category" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="email" name="email" placeholder="Email" ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="web" name="website" placeholder="Website" ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="phone" placeholder="Phone" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="location" placeholder="Address" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="slogan" placeholder="Slogan" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="detail" placeholder="Short Description" ><!-- End: Category -->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h6>Description</h6>
                <textarea class="form-control"  name="description" placeholder="Description in Detail" rows="14" style="padding: 23px 12px; margin-bottom: 10px;"></textarea>
                <h4>Add some photos for the startup</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" type="file" name="image_1">
                        <input class="form-control-file mb-2" type="file" name="image_2">
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" type="file" name="image_3">
                        <input class="form-control-file mb-2" type="file" name="image_4">
                    </div>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">ADD</button></div>
        </form>
    </section>
@endsection

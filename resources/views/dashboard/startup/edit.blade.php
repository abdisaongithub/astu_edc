@extends('layouts.admin')

@section('header')
    Startup
@endsection

@section('content')
    @if($startup)
    <section class="contact-clean">
        <form method="post" action="{{ route('startup_update', $startup->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <h2 class="text-center">Edit Startup</h2><!-- Start: Success Example -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" value="{{ $startup->name }}"></div><!-- End: Success Example -->
                    <!-- Start: Success Example -->
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="category" placeholder="Category" value="{{ $startup->category }}" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="email" name="email" placeholder="Email" value="{{ $startup->email }}"  ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="web" name="website" placeholder="Website" value="{{ $startup->website }}"  ><!-- End: Category -->
                    </div><!-- End: Success Example -->

                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="phone" placeholder="Phone" value="{{ $startup->phone }}" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="location" placeholder="Address" value="{{ $startup->location }}" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="slogan" placeholder="Slogan" value="{{ $startup->slogan }}" ><!-- End: Category -->
                    </div>
                    <div class="form-group">
                        <!-- Start: Category --><input class="form-control" type="text" name="detail" placeholder="Short Description" value="{{ $startup->detail }}" ><!-- End: Category -->
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h6>Description</h6>
                <textarea class="form-control p-2"  name="description" placeholder="Description in Detail" rows="14" style="padding: 23px 12px; margin-bottom: 10px;">{{ $startup->description }}</textarea>
                <h4>Edit photos for the startup</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" name="image_1" type="file">
                        <input class="form-control-file mb-2" name="image_2" type="file">
                    </div>
                    <div class="col-lg-6">
                        <input class="form-control-file mb-2" name="image_3" type="file">
                        <input class="form-control-file mb-2" name="image_4" type="file">
                    </div>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Update</button></div>
        </form>
    </section>
    @endif
@endsection

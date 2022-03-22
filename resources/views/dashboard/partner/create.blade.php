@extends('layouts.admin')

@section('header')
    Partner
@endsection


@section('content')
    <section class="contact-clean">
        <form method="post" action="{{ route('partner_store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">ADD New Partner</h2><!-- Start: Success Example -->
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder=" company Name">
            </div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category --><input class="form-control" type="text" name="link" placeholder="web link" style="padding: 23px 12px;"><!-- End: Category -->
            </div>

            <div class="form-group">


                <h6>Upload the company logo</h6>
                <input class="form-control-file" type="file" name="image">

            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">ADD</button></div>
        </form>
    </section>
@endsection

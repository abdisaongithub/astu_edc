@extends('layouts.admin')

@section('header')
Team
@endsection

@section('content')
    <section class="contact-clean">
        <form method="post" action="{{ route('team_store') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="text-center">ADD New Team Member</h2><!-- Start: Success Example -->
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder=" client Name">
            </div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category --><input class="form-control" type="text" name="position" placeholder="position" style="padding: 23px 12px;"><!-- End: Category -->
            </div>

            <div class="form-group">


                <h6>Profile Picture</h6>
                <input class="form-control-file" type="file" name="image">

            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">ADD</button></div>
        </form>
    </section>
@endsection

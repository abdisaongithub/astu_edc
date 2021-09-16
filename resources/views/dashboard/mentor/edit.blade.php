@extends('layouts.admin')

@section('header')
    Mentor
@endsection

@section('content')

    <section class="contact-clean">
        <form method="POST" action="{{ route('mentor_update', $mentor->id) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <h2 class="text-center">Mentor</h2><!-- Start: Success Example -->
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{ $mentor->name }}" placeholder="Mentor Name">
            </div><!-- End: Success Example -->
            <!-- Start: Success Example -->
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="title" value="{{ $mentor->title }}"placeholder="Title" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="occupation" value="{{ $mentor->occupation }}"placeholder="Occupation" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>
            <div class="form-group">
                <!-- Start: Category -->
                <input class="form-control" type="text" name="rank" value="{{ $mentor->rank }}"placeholder="Rank" style="padding: 23px 12px;">
                <!-- End: Category -->
            </div>

            <div class="form-group">
                <h5>Add image</h5>
                <input class="form-control-file" type="file" name="image">
            </div>

            <button class="btn btn-primary" type="submit">Post</button>
        </form>
    </section><!-- End: Contact Form Clean -->

@endsection

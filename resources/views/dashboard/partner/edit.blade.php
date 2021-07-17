@extends('layouts.admin')

@section('content')
    @if($partner)
        <section class="contact-clean">
            <form method="post" action="{{ route('partner_update', $partner->id) }}">
                @csrf
                @method('put')
                <h2 class="text-center">Edit Partner</h2><!-- Start: Success Example -->
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder=" company Name" value="{{ $partner->name }}">
                </div><!-- End: Success Example -->
                <!-- Start: Success Example -->
                <div class="form-group">
                    <!-- Start: Category --><input class="form-control" value="{{ $partner->link }}" type="text" name="link" placeholder="web link" style="padding: 23px 12px;"><!-- End: Category -->
                </div>

                <div class="form-group">


                    <h6>Upload the company logo</h6>
                    <input class="form-control-file" type="file" name="image">

                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">ADD</button></div>
            </form>
        </section>
    @endif
@endsection

@section('header')
    Partner
@endsection

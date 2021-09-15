@extends('layouts.admin')

@section('content')

    @foreach($partners as $partner)

        {{ $partner }}

    @endforeach

@endsection

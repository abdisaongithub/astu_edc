@extends('layouts.admin')

@section('content')


    @foreach($startups as $startup)
        {{ $startup }}
    @endforeach


@endsection

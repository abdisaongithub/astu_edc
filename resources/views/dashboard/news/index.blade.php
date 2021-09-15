@extends('layouts.admin')

@section('content')

    @foreach($news as $n)

        {{ $n }}

    @endforeach

@endsection

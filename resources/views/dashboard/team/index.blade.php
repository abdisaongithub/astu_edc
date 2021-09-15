@extends('layouts.admin')

@section('content')

    @foreach($teams as $team)
        {{ $team }}
    @endforeach

@endsection

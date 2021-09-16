@extends('layouts.admin')

@section('header')
    <div class="row">
        <div class="col mr-2">
            Testimonials
        </div>
        <div class="col">
            <a href="{{ route('testimonial_create') }}" class="btn btn-sm btn-outline-success">Add Testimonial</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="container p-5">
        @if(count($testimonials) > 0)

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                @foreach($testimonials as $testimonial)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->position }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('testimonial_edit', $testimonial->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('testimonial_destroy', $testimonial->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-outline-danger"
                                   >Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="row">
                <div class="col-md-6">
                    Not Testimonials Yet Created Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('testimonial_create') }}" class="btn btn-sm btn-outline-success">Add a Testimonial</a>
                </div>
            </div>
        @endif
    </div>


@endsection

@extends('layouts.admin')

@section('header')

    <div class="row">
        <div class="col col-md-5 mr-2">
            Startup
        </div>
        <div class="col-md-6 ">
            <a href="{{ route('startup_create') }}" class="btn btn-sm btn-outline-success">Add Startup</a>
        </div>
    </div>
@endsection

@section('content')


    <div class="container p-5">
        @if(count($startups) > 0)
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                @foreach($startups as $startup)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $startup->name }}</td>
                        <td>{{ $startup->description }}</td>
                        <td>{{ $startup->email }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('startup_edit', $startup->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('startup_destroy', $startup->id) }}" method="post">
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
                    Not Startup Added Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('startup_create') }}" class="btn btn-sm btn-outline-success">Add a Startup</a>
                </div>
            </div>
        @endif
    </div>



@endsection

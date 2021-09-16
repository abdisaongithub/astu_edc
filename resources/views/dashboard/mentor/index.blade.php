@extends('layouts.admin')

@section('header')
    <div class="row">
        <div class="col-5 mr-2">
            Mentor
        </div>
        <div class="col">
            <a href="{{ route('mentor_create') }}" class="btn btn-sm btn-outline-success">Add a Mentor</a>
        </div>
    </div>
@endsection

@section('content')



    <div class="container p-5">
        @if(count($mentors) > 0)

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                @foreach($mentors as $mentor)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mentor->name }}</td>
                        <td>{{ $mentor->title }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('mentor_edit', $mentor->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('mentor_destroy', $mentor->id) }}" method="post">
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
                    Not Mentors Added Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('mentor_create') }}" class="btn btn-sm btn-outline-success">Add a Mentor</a>
                </div>
            </div>
        @endif
    </div>

@endsection

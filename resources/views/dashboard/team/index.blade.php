@extends('layouts.admin')

@section('header')

    <div class="row">
        <div class="col-md-4 mr-2">
            Teams
        </div>
        <div class="col">
            <a href="{{ route('team_create') }}" class="btn btn-sm btn-outline-success">Add a Team Member</a>
        </div>
    </div>

@endsection

@section('content')



    <div class="container p-5">
        @if(count($teams) > 0)

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

                @foreach($teams as $team)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->position }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('team_edit', $team->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('team_destroy', $team->id) }}" method="post">
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
                    Not Team Member Added Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('team_create') }}" class="btn btn-sm btn-outline-success">Add a Team Member</a>
                </div>
            </div>
        @endif
    </div>

@endsection

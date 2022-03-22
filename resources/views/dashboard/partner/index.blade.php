@extends('layouts.admin')

@section('header')

    <div class="row">
        <div class="col col-md-5 mr-2">
            Partner
        </div>
        <div class="col-md-6 ">
            <a href="{{ route('partner_create') }}" class="btn btn-sm btn-outline-success">Add Partner</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="container p-5">
        @if(count($partners) > 0)
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Link</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                @foreach($partners as $partner)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $partner->name }}</td>
                        <td>{{ $partner->link }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('partner_edit', $partner->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('partner_destroy', $partner->id) }}" method="post">
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
                    Not Partner Yet Created Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('partner_create') }}" class="btn btn-sm btn-outline-success">Add a Partner</a>
                </div>
            </div>
        @endif
    </div>


@endsection

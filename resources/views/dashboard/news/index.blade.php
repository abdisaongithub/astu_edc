@extends('layouts.admin')

@section('header')
    <div class="row">
        <div class="col-5 mr-2">
            News
        </div>
        <div class="col">
            <a href="{{ route('news_create') }}" class="btn btn-sm btn-outline-success">Add a News</a>
        </div>
    </div>
@endsection

@section('content')



    <div class="container p-5">
        @if(count($news) > 0)

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2">Handle</th>
                </tr>
                </thead>
                <tbody>

                @foreach($news as $n)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $n->title }}</td>
                        <td>{{ $n->description }}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info mr-3"
                               href="{{ route('news_edit', $n->id) }}">Edit
                            </a>
                            <form class="d-inline" action="{{ route('news_destroy', $n->id) }}" method="post">
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
                    Not News Added Yet
                </div>
                <div class="col-md-6">
                    <a href="{{ route('news_create') }}" class="btn btn-sm btn-outline-success">Add a News</a>
                </div>
            </div>
        @endif
    </div>

@endsection

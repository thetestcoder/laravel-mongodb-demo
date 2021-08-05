@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Authors') }}</div>

        <div class="card-body">
            <a href="{{route('author.create')}}" class="btn btn-primary">Create New Author</a>
            <div class="mt-3">
                <h3>List of Authors</h3>
                <ul class="list-group">
                    @forelse($authors as $author)
                        <li class="list-group-item">
                            {{$author->name}} | Total Books - {{$author->books->count()}}
                            <span class="float-right d-flex">
                                <a href="{{route('author.edit', [$author])}}"
                                   class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{route('author.destroy', [$author])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item">No Authors Added Yet</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection

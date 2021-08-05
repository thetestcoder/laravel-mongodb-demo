@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Books') }}</div>

        <div class="card-body">
            <a href="{{route('books.create')}}" class="btn btn-primary">Create New Book</a>
            <div class="mt-3">
                <h3>List of Books</h3>
                <ul class="list-group">
                    @forelse($books as $book)
                        <li class="list-group-item">
                            {{$book->name}} | {{$book->author->name}}
                            <span class="float-right d-flex">
                                <a href="{{route('books.edit', [$book])}}"
                                   class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{route('books.destroy', [$book])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item">No Books Added Yet</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create a Book') }}</div>
        <div class="card-body">
            <form action="{{route('books.update', [$book])}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" name="name" class="form-control" value="{{$book->name}}">
                </div>
                <div class="form-group">
                    <select name="author_id" id="" class="form-control">
                        @forelse($authors as $author)
                            <option value="{{$author->_id}}"
                                    @if($book->author_id === $author->_id) selected @endif
                            >{{$author->name}}</option>
                        @empty
                            <option value="">No Author</option>
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

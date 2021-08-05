@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create a Book') }}</div>
        <div class="card-body">
            <form action="{{route('author.update', [$author])}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Author Name</label>
                    <input type="text" name="name" class="form-control" value="{{$author->name}}">
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

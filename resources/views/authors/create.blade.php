@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Create a Author') }}</div>
        <div class="card-body">
            <form action="{{route('author.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Author Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')
    <form action="/update/{{ $todos->id }}" method="post" class="mt-4 p-4">
        @csrf
        <div class="containar">
            @if (session()->has('failure'))
                <div class="alert alert-danger">
                    {{ session()->get('failure') }}
                </div>
            @endif
        </div>
        <div class="form-group m-3">
            <label for="name">Todo Name</label>
            <input type="text" class="form-control" value="{{ request()->old('name') ?? $todos->name }}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"> {{ request()->old('description') ?? $todos->description }} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>
@endsection

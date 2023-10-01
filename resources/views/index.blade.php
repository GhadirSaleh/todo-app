@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item"><a href="details/{{ $todo->id }}"
                            style="color: cornflowerblue">{{ $todo->name }}</a><a href="completed/{{ $todo->id }}"><span
                                class="btn btn-primary">Mark as completed</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@extends ('layouts.layout')

@section ('navbar')
    @include('templates.indexNavbar')
@endsection

@section('content')
    @include('templates.indexHeader')
    @foreach($todolists as $todolist)
        @include('templates.todoList')
    @endforeach

    @include('templates.addTodoListButton')
@endsection

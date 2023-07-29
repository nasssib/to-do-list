@extends('layout')
@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

      <form action="/create/todo" method="POST">
         {{ csrf_field() }}
        <input type="text" class="form-control input-lg" name="todo" placeholder="crate new todo">

      </form>
    </div>
</div> 
<hr>
@foreach ($todo as $todos)
{{ $todos->todo }} 
<a href="{{ route ('todo.delete', ['id' => $todos->id ] ) }}" class="btn btn-danger">x</a>
<a href="{{ route ('todo.update', ['id' => $todos->id ] ) }}" class="btn btn-info btn-xs"> update </a>
@if( ! $todos->completed)

<a href="{{ route('todo.completed',['id'=> $todos->id]) }}" class="btn btn-success btn-xs"> done </a>

@else
completed

@endif
<hr>
@endforeach

@stop
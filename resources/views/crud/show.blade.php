@extends('layouts.master')

@section('content')

    <h1>{{ $crud->name }}</h1>
    <p class="lead">{{ $crud->email }}</p>
    <hr>

    <a href="{{ route('crud.index') }}" class="btn btn-info">Back to all crud</a>
    <a href="{{ route('crud.edit', $crud->id) }}" class="btn btn-primary">Edit Crud</a>

    <div class="pull-right">
        {!! Form::open([
        'method' => 'DELETE',
        'route' => ['crud.destroy', $crud->id]
        ]) !!}
        {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>



@stop
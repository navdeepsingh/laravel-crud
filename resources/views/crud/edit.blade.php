@extends('layouts.master')

@section('content')

    <h1>Edit Crud - Crud Name </h1>
    <p class="lead">Edit this task below. <a href="{{ route('crud.index') }}">Go back to all crud.</a></p>
    <hr>

    {!! Form::model($crud, [
            'method' => 'PATCH',
            'route' => ['crud.update', $crud->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('crud_level', 'Crud Level') !!}
        {!! Form::select('crud_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Update the Crud!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

@stop
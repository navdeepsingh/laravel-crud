@extends('layouts.master')

@section('content')


    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($crud as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->crud_level }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /crud/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /crud/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('crud/' . $value->id) }}">Show this Nerd</a>

                    <!-- edit this nerd (uses the edit method found at GET /crud/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('crud/' . $value->id . '/edit') }}">Edit this
                        Nerd</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
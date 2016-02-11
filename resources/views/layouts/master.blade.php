<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('crud') }}">Crud Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('crud') }}">View All crud</a></li>
            <li><a href="{{ URL::to('crud/create') }}">Create a Crud</a>
        </ul>
    </nav>

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @yield('content')

</div>
</body>
</html>
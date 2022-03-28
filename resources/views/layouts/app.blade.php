<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>Todo App</title>
</head>
<body>
    <div class="nav">
        <nav class="container d-flex align-items-center justify-content-between ">
            <a href="{{ url('/todos') }}"> <h1 class="title">Todo<span class="title__color">App</span></h1></a>
            <div>
                <a href="{{ route('todos.create') }}" class="btn btn-primary"> Create</a>
                <a href="{{ route('todos') }}" class="btn btn-outline-secondary">Show</a>
            </div>
        </nav>
    </div>

    @yield('content')

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fontawesome/css/all.min.css')}}">
    <title>Simple TodoLists</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @yield ('navbar')
    </nav>
    @include('errors.flash-message')
</header>
<main>
    @yield('content')
</main>
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
<script src="{{URL::asset('js/todoList.js')}}"></script>
</body>
</html>

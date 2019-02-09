<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Album') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
                @admin
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle{{ currentRoute(route('category.create')) }}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administration
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                            <a class="dropdown-item" href="{{ route('category.create') }}">
                                <i class="fas fa-plus fa-lg"></i>
                                Add a category
                            </a>
                        </div>
                    </li>
                @endadmin
            </ul>
            

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item{{ currentRoute(route('register')) }}"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item">
                        <a id="logout" class="nav-link" href="{{ route('logout') }}">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                            {{ csrf_field() }}
                        </form>
                    </li>                
                @endguest


            </ul>
        </div>
    </nav>

@if(session('ok'))
    <div class="container">
        <div class="alert alert-dismissible alert-success fade show" role="alert">
            {{ session('ok') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>

@yield('script')

<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>
</html>

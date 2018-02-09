<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" style="margin-bottom: 65px">
    <nav class="navbar navbar-default navbar-static-top social-float">
        <div class="container">
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="/">Публічна</a></li>
                    <li class="dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Адмінка<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/city')}}">Міста</a></li>
                            <li><a href="{{ url('/admin/tourist')}}">Туристи</a></li>
                            <li><a href="{{ url('/admin/list/cities')}}">Міста з туристами</a></li>
                            <li><a href="{{ url('/admin/list/tourists')}}">Туристи з кількістю відвіданих міст</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
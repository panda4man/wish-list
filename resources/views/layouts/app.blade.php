<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar is-info" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <a href="{{route('login')}}" class="navbar-item {{activePage('login')}}">Login</a>
                <a href="{{route('register')}}" class="navbar-item {{activePage('register')}}">Register</a>
            </div>
        </div>
    </nav>
    <div id="app" class="is-flex">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

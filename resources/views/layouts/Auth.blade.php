<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@section('head')
    @include('layouts.head')
    @yield('links_adicionais')
@show
<body class="hold-transition login-page">

@yield('content')


    
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">

<head>

<title>Dashboard | @yield('title')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    @include('_includes._head')
    @yield('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendor/css/login.css') }}">
</head>

<body class="login">


    @yield('content')


    @include('_includes._javascript')
    @include('_includes._messages')

    @yield('scripts')

</body>

</html>

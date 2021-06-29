<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('partials.nav')
    @yield('content')
</body>

</html>
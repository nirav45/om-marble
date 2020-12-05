<!DOCTYPE html>
<html>
    <head>
        <title>Om Marbles - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}" >

        <script src="{{ asset('js/javascript.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    </head>
    <body>
        @include('admin/includes/header')
        @yield('content')
        @include('admin/includes/footer')
        <script src="{{ asset('js/myScript.js') }}"></script>
    </body>
</html>
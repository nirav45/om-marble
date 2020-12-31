<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Om Marbles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href=" /css/animate.css">

        <script src="/js/javascript.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/wow.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    </head>
    <body>
        @include('../includes/header')
        @yield('content')
        @include('../includes/footer')
        <script src="/js/myScript.js"></script>
    </body>
</html>

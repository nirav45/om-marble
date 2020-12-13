<!DOCTYPE html>
<html>
    <head>
        <title>Om Marbles - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href=" /css/animate.css">
        <link rel="stylesheet" href="/css/aos.css" >

        <script src="{/js/javascript.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/aos.js"></script>
        <script type="text/javascript" src="/js/wow.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>

        <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
  	    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    </head>
    <body>
        @include('../includes/header')
        @yield('content')
        @include('../includes/footer')
        <script src="/js/myScript.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Esporta Hotels & Resorts</title>
    <link rel="icon" href="{{env('APP_URL')}}/almaris/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Esporta Hotels & Resorts" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{env('APP_URL')}}/almaris/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{env('APP_URL')}}/almaris/css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="{{env('APP_URL')}}/almaris/css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="{{env('APP_URL')}}/almaris/css/style.css" rel="stylesheet" type="text/css" >
    <link href="{{env('APP_URL')}}/almaris/css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="{{env('APP_URL')}}/almaris/css/colors/scheme-02.css" rel="stylesheet" type="text/css" >

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        @include('layouts.almaris.hotel-one-page.header')
        @yield('content')
        @include('layouts.almaris.hotel-one-page.footer')
        
        
        
    </div>


    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{env('APP_URL')}}/almaris/js/plugins.js"></script>
    <script src="{{env('APP_URL')}}/almaris/js/designesia.js"></script>
    <script src="{{env('APP_URL')}}/almaris/js/swiper.js"></script>
    <script src="{{env('APP_URL')}}/almaris/js/custom-marquee.js"></script>
    <script src="{{env('APP_URL')}}/almaris/js/custom-swiper-2.js"></script>

</body>

</html>
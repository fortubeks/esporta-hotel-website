<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Esporta Hotels & Resorts</title>
    <link rel="icon" href="{{env('APP_URL')}}/almaris/images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Esporta Hotels & Resorts" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="{{env('APP_URL')}}/almaris/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{env('APP_URL')}}/almaris/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="{{env('APP_URL')}}/almaris/css/swiper.css" rel="stylesheet" type="text/css">
    <link href="{{env('APP_URL')}}/almaris/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{env('APP_URL')}}/almaris/css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{env('APP_URL')}}/almaris/css/colors/scheme-02.css" rel="stylesheet" type="text/css">

    <style>
        .floating-button {
            position: fixed;
            bottom: 20px;
            /* Distance from the bottom of the viewport */
            right: 20px;
            /* Distance from the right of the viewport */
            z-index: 1000;
            /* Ensures it's above other elements */
        }

        .floating-button button {
            background-color: #007BFF;
            /* Button color */
            color: white;
            /* Text color */
            border: none;
            /* Removes border */
            border-radius: 50px;
            /* Rounded corners */
            padding: 10px 20px;
            /* Button padding */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Adds a subtle shadow */
            cursor: pointer;
            /* Changes cursor to pointer on hover */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s ease;
            /* Smooth background color transition */
        }

        .floating-button button:hover {
            background-color: #0056b3;
            /* Darker shade on hover */
        }
    </style>
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

    <!-- Floating button -->
    <div class="floating-button">
        <a aria-label="Chat on WhatsApp" href="https://wa.me/2348174619099"> <img alt="Chat on WhatsApp" src="{{url('almaris/images/misc/WhatsAppButtonWhiteSmall.png')}}" />
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
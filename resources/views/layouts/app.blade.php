<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Royal Plate is a HTML template created for restaurants and catering companies.">
    <meta name="author" content="pixel-industry">
    <meta name="keywords" content="CSS, HTML5, clean, restaurant, jQuery, retina, bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/><!-- bootstrap grid -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
    <link rel="stylesheet" href="/css/style.css"/><!-- template styles -->
    <link rel="stylesheet" href="/css/color-default.css"/><!-- default template color styles -->
    <link rel="stylesheet" href="/css/retina.css"/><!-- retina ready styles -->
    <link rel="stylesheet" href="/css/responsive.css"/><!-- responsive styles -->
    <link rel="stylesheet" href="/css/animate.css"/><!-- animation for content -->
    <link rel="stylesheet" href="/masterslider/style/masterslider.css" /><!-- Master slider css -->
    <link rel="stylesheet" href="/masterslider/skins/default/style.css" /><!-- Master slider default skin -->
    <link rel='stylesheet' href='/owl-carousel/owl.carousel.css'/><!-- Events carousel -->
    <link rel='stylesheet' href='/owl-carousel/owl.theme.css'/><!-- Events carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/css/fluid-gallery.css">
    <link rel="stylesheet" href="/css/baguetteBox.min.css">
    <script src="js/baguetteBox.min.js" async></script>

    <!-- Magnific Popup - image lightbox -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Google Web fonts -->

    <link href='https://fonts.googleapis.com/css?family=Suranna' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>

    <!-- Font icons -->
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> Styles -->


</head>
<body>
    <div id="app">
            @include('inc.navbar')
       
            @yield('content')
        
    </div>

    <div id="copyright-container">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6 start -->
                    <div class="col-md-6">
                        <p>©<a href="https://www.fotografija-grudnik.si" style="color:white; font-weight:normal" >Valentin Grudnik 2019. All rights reserved.</a></p>
                    </div><!-- .col-md-6 end -->

                    <!-- .col-md-6 start -->
                    <div class="col-md-6">
                        
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->

            <a href="#" class="scroll-up show-scroll"><i class="fa fa-angle-double-up"></i></a>

        </div>

    <script src="/js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="/js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="/js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
<script src="/masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="/masterslider/jquery.easing.min.js"></script><!-- Master slider easing js -->
<script src="/js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
<script src="/owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
<script src="/js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="/js/include.js"></script><!-- custom js functions -->
<script src="/js/TweenMax.min.js"></script> <!-- Plugin for smooth scrolling-->
<script src="/js/retina.min.js"></script><!-- retina images script -->
<script src="/js/ScrollToPlugin.min.js"></script> <!-- Plugin for smooth scrolling-->
</body>


</html>

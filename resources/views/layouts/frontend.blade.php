<!DOCTYPE html>
<html>

    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Properties -->
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{asset('frontend/assets')}}/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/assets')}}/images/apple-touch-icon.png">

        <!-- Google Fonts -->
       	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
       	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/uikit.min.css" />
        <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/tiny-date-picker.min.css" />
        <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/style.css" />
        <link rel="stylesheet" href="{{asset('frontend/assets')}}/css/media-query.css" />
        @yield('style')

    </head>

    <body class="impx-body" id="top">

    	<!-- HEADER -->
        @include('includes.frontend.header')
		<!-- HEADER END -->

        <!-- CONTENT -->
        @yield('content')
        <!-- CONTENT END -->

		<!-- FOOTER -->
		@include('includes.frontend.footer')
		<!-- FOOTER END -->

    	<!-- Javascript -->
    	<script src="{{asset('frontend/assets')}}/js/jquery.js"></script>
        <script src="{{asset('frontend/assets')}}/js/uikit.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></script>
        <script src="{{asset('frontend/assets')}}/js/jquery.gmap.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/jquery.parallax.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/tiny-date-picker.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/date-config.js"></script>
        <script src="{{asset('frontend/assets')}}/js/template-config.js"></script>
        @yield('script')
    </body>
</html>


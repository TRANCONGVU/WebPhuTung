<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Phụ tùng xe máy, Sửa xe máy uy tín, Sơn xe máy</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap_4.0.0/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/reset-browser.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/fontawesome.5.7.2/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/OwlCarousel2-2.3.4/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/banner-slider/engine1/style.css') }}" />
    <!-- End WOWSlider.com HEAD section -->
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('lib/bootstrap_4.0.0/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

</head>
<body>

@include('header')
@yield('content')
@include('footer')

</body>
</html>

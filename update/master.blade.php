<!DOCTYPE html>
<html>
@php $setting=setting();@endphp
<head>
	<meta charset="utf-8">
	<title>{{$setting->site_title}}</title>
    
	<!-- Stylesheets -->
	<link href="{{asset('')}}frontend/css/bootstrap.css" rel="stylesheet">
	<link href="{{asset('')}}frontend/css/style.css" rel="stylesheet">
	<link href="{{asset('')}}frontend/css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">

	<link rel="shortcut icon" href="{{$setting->fav_logo}}" type="image/x-icon">
	<link rel="icon" href="{{$setting->fav_logo}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('')}}frontend/css/font-awesome.min.css" />
	<link rel="stylesheet" href="{{asset('')}}frontend/css/flaticon.css" />

    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('')}}frontend/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend/vendors/owl-carousel/owl.theme.default.min.css" />
	<link href="{{asset('')}}frontend/css/custom.css" rel="stylesheet">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
        @if(Request::is('contact*'))
        
        @else
		<div class="preloader"></div>
        @endif
        @include('frontend.layout.header')
        @yield('content')
        @include('frontend.layout.footer')
    </div>
	<!-- End PageWrapper -->

	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

	<script src="{{asset('')}}frontend/js/jquery.js"></script>
	<script src="{{asset('')}}frontend/js/appear.js"></script>
	<script src="{{asset('')}}frontend/js/owl.js"></script>
	<script src="{{asset('')}}frontend/js/wow.js"></script>
	<script src="{{asset('')}}frontend/js/odometer.js"></script>
	<script src="{{asset('')}}frontend/js/mixitup.js"></script>
	<script src="{{asset('')}}frontend/js/popper.min.js"></script>
	<script src="{{asset('')}}frontend/js/parallax-scroll.js"></script>
	<script src="{{asset('')}}frontend/js/parallax.min.js"></script>
	<script src="{{asset('')}}frontend/js/bootstrap.min.js"></script>
	<script src="{{asset('')}}frontend/js/tilt.jquery.min.js"></script>
	<script src="{{asset('')}}frontend/js/magnific-popup.min.js"></script>
	<script src="{{asset('')}}frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="{{asset('')}}frontend/vendors/particles/particles.min.js"></script>
    <script src="{{asset('')}}frontend/vendors/particles/particles-config.js"></script>
    @yield('js')
	<script src="{{asset('')}}frontend/js/script.js"></script>
	<script src="{{asset('')}}frontend/js/custom.js"></script>

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{asset('')}}frontend/js/respond.js"></script><![endif]-->

</body>

</html>        
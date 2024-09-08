<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>NordiGate</title>

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
        @yield('css')  
	<link rel="shortcut icon" href="{{asset('')}}frontend/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="{{asset('')}}frontend/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('')}}frontend/css/font-awesome.min.css" />
	<link rel="stylesheet" href="{{asset('')}}frontend/css/flaticon.css" />


	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<!-- <div class="preloader"></div> -->

        @include('frontend.layout.header')
        @yield('content')
        @include('frontend.layout.footer')
	<!-- Footer -->
   
	<!-- Search Popup -->
	
	<!-- End Search Popup -->

	</div>
	<!-- End PageWrapper -->

	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
    @yield('js')  
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

	<script src="{{asset('')}}frontend/js/script.js"></script>

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="{{asset('')}}frontend/js/respond.js"></script><![endif]-->

</body>

</html>    
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Form Wizard | Okler Themes | Porto-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/vendor/pnotify/pnotify.custom.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			@include('layouts.partial.header')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				@include('layouts.partial.sidebar')
				<!-- end: sidebar -->

				@yield('content')
			</div>

		</section>

		<!-- Vendor -->
		<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
		<script src="{{ asset('assets/vendor/pnotify/pnotify.custom.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>


		<!-- Examples -->
		<script src="{{ asset('assets/javascripts/forms/examples.wizard.js') }}"></script>

	</body>
</html>
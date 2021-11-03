<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/front/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/front/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/front/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/front/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/front/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/front/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/front/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/front/css/icons.css') }}" rel="stylesheet">
	<title>@yield('title')</title>
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		{{-- <div class="discount-alert bg-dark-1 d-none d-lg-block">
			<div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
				<div class="d-lg-flex align-items-center gap-2 justify-content-center">
					<p class="mb-0 text-white">Get Up to <strong>40% OFF</strong> New-Season Styles</p>	<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Men</a>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Women</a>
					<p class="mb-0 font-13 text-light-3">*Limited time only</p>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div> --}}
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">

            @include('front.includes.header-top')
            @include('front.includes.header-center')
            @include('front.includes.header-bottom')

		</div>
		<!--end top header wrapper-->

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start content-->
                @yield('content')
				<!--end content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
        @include('front.includes.footer')
		<!--end footer section-->

	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('includes.themes')
	<!--end switcher-->
    @include('front.includes.scripts')
</body>

</html>

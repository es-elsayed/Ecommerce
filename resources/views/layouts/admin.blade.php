<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/admin/images/favicon-32x32.png" type="image/png')}}" />
	<!--plugins-->
	<link href="{{ asset('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('assets/admin/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/admin/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/admin/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	{{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/dark-theme.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/admin/css/semi-dark.css')}}" />
	<link rel="stylesheet" href="{{ asset('assets/admin/css/header-colors.css')}}" /> --}}
	<title>@yield('title')</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('admin.includes.sidebar')

		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.includes.header')

		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('admin.includes.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('includes.themes')
	<!--end switcher-->
	<!-- Bootstrap JS -->
	@include('admin.includes.scripts')
</body>

</html>

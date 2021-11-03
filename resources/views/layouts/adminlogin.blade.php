<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
    @include('includes.icon')
	<!--plugins-->
	<link href="{{ asset('assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/admin/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet">
	<title>@yield('title')</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		@yield('content')
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('assets/admin/js/app.js') }}"></script>
</body>

</html>

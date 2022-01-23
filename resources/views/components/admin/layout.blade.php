@props(['title'])
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="shortcut icon" type="image/svg" href="{{ asset('assets/images/favicon.png') }}"/>
    <!--plugins-->
    @include('admin.includes.style')

    <title>{{ $title }}</title>
</head>

<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <x-admin.includes.sidebar />

        <!--end sidebar wrapper -->
        <!--start header -->
        <x-admin.includes.header />

        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <x-alerts.success />
                <x-alerts.error />
                {{ $slot }}
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <x-admin.includes.footer />
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <x-admin.includes.themes />
    <!--end switcher-->
    <!-- Bootstrap JS -->
    @include('admin.includes.scripts')
</body>

</html>

<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <x-site.includes.icon/>
    <!--plugins-->
    @include('site.includes.extra.style')

    <title>
        {{ $title }}
    </title>
</head>

<body class="bg-theme bg-notheme"> <b class="screen-overlay"></b>
    <!--wrapper-->
    <div class="wrapper">
        {{-- <div class="discount-alert bg-dark-1 d-none d-lg-block">
            <div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
                <div class="d-lg-flex align-items-center gap-2 justify-content-center">
                    <p class="mb-0 text-white">Get Up to <strong>40% OFF</strong> New-Season Styles</p> <a
                        href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Men</a>
                    <a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Women</a>
                    <p class="mb-0 font-13 text-light-3">*Limited time only</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div> --}}
        <!--start top header wrapper-->

        <div class="header-wrapper bg-dark-1">
            <x-site.headers.offer />
            <x-site.headers.top />

            <x-site.headers.center :maincategories="$main_categories" />
            <x-site.headers.bottom :maincategories="$main_categories" />
        </div>

        <x-alerts.success />
        <x-alerts.error />

        <!--end top header wrapper-->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--start content-->
                {{ $slot }}
                <!--end content-->
            </div>
        </div>
        <!--end page wrapper -->
        <!--start footer section-->
        <x-site.footers.index :maincategories="$main_categories" :site-info="$siteInfo" />
        <!--end footer section-->

    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <x-site.includes.themes/>
    <!--end switcher-->
    @include('site.includes.extra.scripts')
</body>

</html>

@extends('layouts.site')
@section('title')
Profile
@endsection
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom d-none d-md-flex">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">Profile</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i
                                        class="bx bx-home-alt"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="py-4">
        <div class="container">

            <h3 class="d-none">Account</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-none mb-3 mb-lg-0">
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <a href="{{ route('site.profile.index') }}"
                                            class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == 'site.profile.index') active @else bg-transparent @endif">Dashboard
                                            <i class="bx bx-tachometer fs-5"></i></a>
                                        <a href="{{ route('site.profile.edit',auth()->user()->id) }}"
                                            class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == 'site.profile.edit') active @else bg-transparent @endif">Account
                                            Details <i class="bx bx-user-circle fs-5"></i></a>
                                        <a href="{{ route('site.order.all',auth()->user()->id) }}"
                                            class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == '') active @else bg-transparent @endif">Orders
                                            <i class="bx bx-cart-alt fs-5"></i></a>
                                        {{-- <a href="account-downloads.html"
                                            class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == '') active @else bg-transparent @endif">Downloads
                                            <i class="bx bx-download fs-5"></i></a>
                                            <a href="account-payment-methods.html"
                                                class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == '') active @else bg-transparent @endif">Payment
                                                Methods <i class="bx bx-credit-card fs-5"></i></a> --}}
                                        <a href="{{ route('site.address.show',auth()->user()->id) }}"
                                            class="list-group-item d-flex justify-content-between align-items-center @if(Route::currentRouteName() == '') active @else bg-transparent @endif">Addresses
                                            <i class="bx bx-home-smile fs-5"></i></a>
                                        <a href="{{ route('site.logout') }}"
                                            class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout
                                            <i class="bx bx-log-out fs-5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-none mb-0">
                                @yield('profile-content')
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </section>
    <!--end shop cart-->
</div>
@endsection

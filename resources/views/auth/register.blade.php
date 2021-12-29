@extends('layouts.site')
@section('title')
{{ __('Sign Up') }}
@endsection
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--start breadcrumb-->
<section class="py-3 border-bottom d-none d-md-flex">
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center">
            <h3 class="breadcrumb-title pe-3">{{ __('Sign Up') }}</h3>
            <div class="ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Sign Up') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--end breadcrumb-->
<!--start shop cart-->
<section class="py-0 py-lg-5">
    <div class="container">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">{{ __('Sign Up') }}</h3>
                                    <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                                    </p>
                                </div>
                                @include('site.includes.cards.social')
                                <div class="login-separater text-center mb-4">
                                    <span>OR SIGN UP WITH EMAIL</span>
                                    <hr />
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-sm-6">
                                            <label for="f_name" class="form-label">First Name</label>
                                            <input type="text"
                                                class="form-control @error('f_name') is-invalid @enderror" id="f_name"
                                                name="f_name" placeholder="First Name">
                                            @error('f_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="l_name" class="form-label">Last Name</label>
                                            <input type="text"
                                                class="form-control @error('l_name') is-invalid @enderror" id="l_name"
                                                name="l_name" placeholder="Last Name">
                                            @error('l_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" placeholder="example@user.com">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="phone" class="form-label">{{ __('content.phone number')
                                                }}</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" placeholder="0123456789">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">{{ __('Password')}}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password"
                                                    class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                    id="password" name="password" placeholder="Enter Password" required
                                                    autocomplete="new-password"> <a href="javascript:;"
                                                    class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password-confirm" class="form-label">{{ __('Confirm Password')
                                                }}</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password"
                                                    class="form-control border-end-0 @error('password_confirmation') is-invalid @enderror"
                                                    id="password-confirm" name="password_confirmation"
                                                    placeholder="Enter Password" required autocomplete="new-password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-light"><i class='bx bx-user'></i>{{
                                                    __('Sign Up') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</section>
<!--end shop cart-->
@endsection

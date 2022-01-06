@extends('layouts.adminlogin')
@section('title')
    Login
@endsection
@section('content')
<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col mx-auto">
                <div class="mb-4 text-center">
                    <img src="{{ asset('assets/admin/images/logo-img.png') }}" width="180" alt="" />
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="text-center">
                                <h3 class="">Sign in</h3>
                                <p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                                </p>
                            </div>
                            <div class="d-grid">
                                <a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                  <img class="me-2" src="{{ asset('assets/admin/images/icons/search.svg') }}" width="16" alt="Image Description">
                  <span>Sign in with Google</span>
                                    </span>
                                </a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                            </div>
                            {{-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span> --}}
                                <hr/>
                            </div>
                            <div class="form-body">
                                <form class="row g-3" method="POST" action="{{ route('admin.login.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="off" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Enter Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input id="password" type="password" name="password" required class="form-control border-end-0 @error('password') is-invalid @enderror" placeholder="Enter Password" autocomplete="off"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-light"><i class="bx bxs-lock-open"></i>Sign in</button>
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
</div>@endsection

@extends('layouts.site')
@section('title')
    Reset Password
@endsection
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
             <h3 class="breadcrumb-title pe-3">Reset Password</h3>
             <div class="ms-auto">
                 <nav aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0 p-0">
                         <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                         </li>
                         <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                         </li>
                         <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                     </ol>
                 </nav>
             </div>
         </div>
         </div>
     </section>
    <!--end breadcrumb-->

    <!--start shop cart-->
     <section class="">
         <div class="container">
             <div class="authentication-reset-password d-flex align-items-center justify-content-center">
                 <div class="row">
                     <div class="col-12 col-lg-10 mx-auto">
                         <div class="card">
                             <div class="row g-0">
                                 <div class="col-lg-5 border-end">
                                     <div class="card-body">
                                        <form method="POST" action="{{ route('password.update') }}">
                                            @csrf

                                            <input type="hidden" name="token" value="{{ $token }}">
                                         <div class="p-5">
                                             <h4 class="font-weight-bold">Genrate New Password</h4>
                                             <p class="">We received your reset password request. Please enter your new password!</p>
                                             <div class="mb-3 mt-5">
                                                 <label for="email"  class="form-label">{{ __('E-Mail Address') }}</label>
                                                 <input id="email" type="email" placeholder="Enter new password"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                 @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                             <div class="mb-3 mt-5">
                                                 <label class="form-label">New Password</label>
                                                 <input type="password" placeholder="Enter new password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                 @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                             <div class="mb-3">
                                                 <label for="password-confirm" class="form-label">Confirm Password</label>
                                                 <input id="password-confirm" type="password"  class="form-control" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                                             </div>
                                             <div class="d-grid gap-2">
                                                 <button type="submit" class="btn btn-light">{{ __('Reset Password') }}</button> <a href="authentication-login.html" class="btn btn-light"><i class="bx bx-arrow-back mr-1"></i>Back to Login</a>
                                             </div>
                                         </div>
                                        </form>
                                     </div>
                                 </div>
                                 <div class="col-lg-7">
                                     <img src="{{ asset('assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
    <!--end shop cart-->

@endsection

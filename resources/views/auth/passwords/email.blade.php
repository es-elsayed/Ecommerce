<x-site.layout>
    <x-slot name="title">
        {{ __('content.forget password') }}
    </x-slot>
    <!--start breadcrumb-->
    <section class="py-3 border-bottom d-none d-md-flex">
        <div class="container">

            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">
                    {{ __('content.forget password') }}
                </h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:;">
                                    <i class="bx bx-home-alt"></i>
                                    {{ __('content.home') }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ __('content.forget password') }}
                            </li>
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
            <div class="authentication-forgot d-flex align-items-center justify-content-center">
                <div class="card forgot-box">
                    <div class="card-body">
                        <div class="p-4 rounded  border">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="text-center">
                                <img src="{{ asset('assets/site/images/icons/forgot-2.png') }}" width="120" alt="" />
                            </div>
                            <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                            <p class="">Enter your registered email ID to reset the password</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="my-4">
                                    <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" placeholder="example@user.com" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-light btn-lg">{{ __('Send Password Reset Link')
                                        }}</button>
                                    <a href="{{ route('login') }}" class="btn btn-light btn-lg"><i
                                            class='bx bx-arrow-back me-1'></i>Back to Login</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end shop cart-->
</x-site.layout>

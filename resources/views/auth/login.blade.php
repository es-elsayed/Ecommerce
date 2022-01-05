<x-site.layout>
    <x-slot name="title">
        {{ __('content.sign in') }}
    </x-slot>
    <!--start breadcrumb-->
    <section class="py-3 border-bottom d-none d-md-flex">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">{{ __('content.sign in') }}</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i
                                        class="bx bx-home-alt"></i>{{__('content.home')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('content.sign in') }}</li>
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
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="row row-cols-1 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">{{ __('content.sign in') }}</h3>
                                        <p>{{ __("content.don't have an account yet") }}<a
                                                href="{{ route('register') }}">{{ __('content.sign up here') }}</a>
                                        </p>
                                    </div>
                                    @include('site.includes.cards.social')
                                    <div class="login-separater text-center mb-4"> <span>{{ __('content.sign in with')
                                            }}{{ __('content.email') }}</span>
                                        <hr>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="email" class="form-label">{{ __('content.email') }} / {{
                                                    __('content.phone') }}</label>
                                                <input type="text"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    placeholder="{{ __('content.enter')." ". __('content.email')."
                                                    / ". __('content.phone') }}" name="email" value="{{ old('email') }}"
                                                    required autocomplete="off" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">{{ __('content.password')
                                                    }}</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password"
                                                        class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                        id="password"
                                                        placeholder="{{ __('content.enter')." ". __('content.password') }}"
                                                        name="password" required autocomplete="off"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"><i
                                                            class="bx bx-hide"></i></a>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked="">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">{{
                                                        __('content.remember me') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"> <a href="{{ route('password.request') }}">{{
                                                    __('content.forget password') }}</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-light"><i
                                                            class="bx bxs-lock-open"></i>{{ __('content.sign in')
                                                        }}</button>
                                                    {{-- @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                    @endif --}}
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
</x-site.layout>

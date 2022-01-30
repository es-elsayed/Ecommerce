<x-site.layout :title="__('verify')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('content.verify your email address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('content.Before proceeding, please check your email for a verification link.') }}
                        {{ __('content.If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('content.click here
                                to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-site.layout>

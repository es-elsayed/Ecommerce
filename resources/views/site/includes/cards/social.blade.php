<div class="d-grid">
    <a class="my-4 shadow-sm btn btn-light" href="{{ route('social.login','google') }}"> <span class="d-flex justify-content-center align-items-center">
        <img class="me-2" src="{{asset("assets/site/images/icons/search.svg")}}" width="16" alt="Image Description">
        <span>{{ __('content.sign in with') }}{{__('content.google')}}</span>
        </span>
    </a>
    <a href="{{ route('social.login','facebook') }}" class="btn btn-light">
        <i class="bx bxl-facebook"></i>
        {{ __('content.sign in with') }}{{__('content.facebook')}}
    </a>
</div>

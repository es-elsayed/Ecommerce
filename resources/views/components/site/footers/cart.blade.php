<div class="d-lg-flex align-items-center gap-2"> <a href="{{ route('site.shop.index') }}"
    class="btn btn-light btn-ecomm"><i class="bx bx-shopping-bag"></i>{{ __('content.continue shoping') }}</a>
    <form class="ms-auto" action="{{ route('site.cart.clear') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-light btn-ecomm ms-auto"><i
            class="bx bx-x-circle"></i>{{__('content.clear cart')}}</button>
    </form>
{{-- <a href="javascript:;" class="btn btn-white btn-ecomm"><i class="bx bx-refresh"></i>
    Update Cart</a> --}}
</div>


{{-- <form action="{{ route('site.cart.update') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-white btn-ecomm"><i
        class="bx bx-x-circle"></i> Clear Cart</button>
</form> --}}

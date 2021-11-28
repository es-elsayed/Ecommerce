@extends('layouts.site')
@section('title')
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
@include('site.includes.headers.cart')
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="py-4">
        <div class="container">
            <div class="shop-cart">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="shop-cart-list mb-3 p-3">
                            @if ($cartItems)
                            @foreach ($cartItems as $item)
                            @include('site.includes.cards.cart')
                            @endforeach
                            @endif
                            @include('site.includes.footers.cart')
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="checkout-form p-3 bg-dark-1">
                            {{-- <div class="card rounded-0 border bg-transparent shadow-none">
                                <div class="card-body">
                                    <p class="fs-5 text-white">{{ __("content.apply discount code") }}</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-0"
                                            placeholder="{{ __("content.enter discount code") }}">
                                        <button class="btn btn-light btn-ecomm" type="button">{{ __("content.apply discount code") }}</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                <div class="card-body">
                                    {{-- <p class="mb-2">{{ __('content.subtotal') }}: <span class="float-end">{{ currency(Cart::getTotal()) }}</span>
                                    </p>
                                    <p class="mb-2">{{ __('content.shipping') }}: <span class="float-end">--</span>
                                    </p>
                                    <p class="mb-2">{{ __('content.taxes') }} ({{ config('shopping_cart.tax') }}%): <span class="float-end">
                                        {{ getNumbers()['newTax'] }}
                                        </span>
                                    </p>
                                    <p class="mb-0">{{ __('content.discount') }}: <span class="float-end">{{ getNumbers()['newTax'] }}</span>
                                    </p> --}}
                                    {{-- <div class="my-3 border-top"></div> --}}
                                    <h5 class="mb-0">{{ __('content.subtotal') }} ({{ Cart::getTotalQuantity() == 1 ? Cart::getTotalQuantity() ." ". __('content.item') : Cart::getTotalQuantity() ." ". __('content.items') }}): <span class="float-end">{{ currency(getNumbers()['subTotal']) }}</span></h5>
                                    <div class="my-4"></div>
                                    <div class="d-grid"> <a href="{{ route('site.checkout.index') }}" class="btn btn-white btn-ecomm">{{ __('content.proceed to checkout') }}</a>
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
</div>
@endsection
@endsection

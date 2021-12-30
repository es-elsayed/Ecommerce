@extends('layouts.site')
@section('title')
{{ __('content.address') }}
@endsection
@section('content')
<!--start breadcrumb-->
@include('site.includes.headers.checkout')
<!--end breadcrumb-->
<!--start shop cart-->
<section class="py-4">
    <div class="container">
        <div class="shop-cart">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="checkout-details">
                        <div class="card bg-transparent rounded-0 shadow-none">
                            @include('site.includes.cards.cart-track')
                        </div>
                        <div class="card rounded-0">
                            @include('site.includes.cards.profile')
                        </div>
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="border p-3">
                                    <div class="form-body">
                                        <form method="POST" action="{{ route('site.address.store') }}" class="row g-3">
                                            @csrf
                                            <div class="col-md-12">
                                                <h6 class="mb-0 h5">{{ __('content.address') }}</h6>
                                                <div class="my-3 border-bottom"></div>
                                                @foreach ($addresses as $address)
                                                <div class="form-check">
                                                    <input class="form-check-input" name="address_choise"
                                                        value="{{ $address->id }}" type="radio"
                                                        id="address_{{ $loop->iteration }}">
                                                    <label class="form-check-label"
                                                        for="address_{{ $loop->iteration }}">
                                                        {{ $address->region->name }},
                                                        {{ $address->city->name }},
                                                        {{ $address->address }}
                                                    </label>
                                                </div>
                                                @endforeach
                                                @error("address_choise")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <br>
                                            </div>
                                            @include('site.includes.extra.add-address')
                                            <div class="col-md-12 form-check hide-address">
                                                <input class="form-check-input" type="checkbox" id="save_address"
                                                    name="save_address" checked="">
                                                <label class="form-check-label" for="save_address">Save new
                                                    Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-grid">
                                                    <a href="{{ route('site.cart.list') }}"
                                                        class="btn btn-light btn-ecomm">
                                                        <i class="bx bx-chevron-left"></i>
                                                        {{ __('content.back to')." ".__('content.cart') }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-white btn-ecomm">
                                                        {{ __('content.proceed to')." ".__('content.shipping') }}<i
                                                            class="bx bx-chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('site.includes.cards.cart-info')
            </div>
            <!--end row-->
        </div>
    </div>
</section>
<!--end shop cart-->
@endsection

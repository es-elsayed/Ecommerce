@extends('layouts.site')
@section('title')
    Checkout
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
                                {{-- <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-grid">
                                            <a href="{{ route('site.checkout.renderbilling') }}" class="btn btn-white btn-ecomm billing-address">
                                                <i class="bx bx-chevron-down"></i>Billing Address
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-grid">
                                            <a href="{{ route('site.checkout.rendernew') }}" class="btn btn-light btn-ecomm new-address">
                                                New Address<i class="bx bx-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="card-body">
                                    <div class="border p-3">
                                        <div class="form-body">
                                            <form method="POST" action="{{ route('site.address.store') }}" class="row g-3">
                                                @csrf
                                                <div class="col-md-12">
                                                    <h6 class="mb-0 h5">Address</h6>
                                                    <div class="my-3 border-bottom"></div>
                                                    @foreach ($addresses as $address)
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="address_choise" value="{{ $address->id }}" type="radio" id="address_{{ $loop->iteration }}">
                                                        <label class="form-check-label" for="address_{{ $loop->iteration }}">
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

                                                {{-- <h2 class="h5 mb-0">Address</h2>
                                                <div class="my-3 border-bottom"></div> --}}
                                                    @include('site.includes.extra.add-address')
                                                    <div class="col-md-12 form-check hide-address">
                                                        <input class="form-check-input" type="checkbox" id="save_address" name="save_address" checked="">
                                                        <label class="form-check-label" for="save_address">Save new Address</label>
                                                    </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">
                                                        <a href="{{ route('site.cart.list') }}" class="btn btn-light btn-ecomm">
                                                            <i class="bx bx-chevron-left"></i>Back to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-white btn-ecomm">
                                                            Proceed to Shipping<i class="bx bx-chevron-right"></i>
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

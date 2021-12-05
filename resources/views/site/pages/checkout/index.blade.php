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
                                <div class="card-body">
                                    <div class="steps steps-light">
                                        <a class="step-item active" href="shop-cart.html">
                                            <div class="step-progress"><span class="step-count">1</span>
                                            </div>
                                            <div class="step-label"><i class="bx bx-cart"></i>Cart</div>
                                        </a>
                                        <a class="step-item active current" href="checkout-details.html">
                                            <div class="step-progress"><span class="step-count">2</span>
                                            </div>
                                            <div class="step-label"><i class="bx bx-user-circle"></i>Details</div>
                                        </a>
                                        <a class="step-item" href="checkout-shipping.html">
                                            <div class="step-progress"><span class="step-count">3</span>
                                            </div>
                                            <div class="step-label"><i class="bx bx-cube"></i>Shipping</div>
                                        </a>
                                        <a class="step-item" href="checkout-payment.html">
                                            <div class="step-progress"><span class="step-count">4</span>
                                            </div>
                                            <div class="step-label"><i class="bx bx-credit-card"></i>Payment</div>
                                        </a>
                                        <a class="step-item" href="checkout-review.html">
                                            <div class="step-progress"><span class="step-count">5</span>
                                            </div>
                                            <div class="step-label"><i class="bx bx-check-circle"></i>Review</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{ auth()->user()->image }}" width="90" alt="" class="rounded-circle p-1 border">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0">{{ auth()->user()->f_name." ".auth()->user()->l_name }}</h6>
                                            <p class="mb-0">{{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="ms-auto">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-edit"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="border p-3">
                                        <div class="form-body">
                                            <form method="POST" action="{{ route('site.checkout.details') }}" class="row g-3">
                                                @csrf
                                                <h2 class="h5 mb-0">Details</h2>
                                                <div class="my-3 border-bottom"></div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.first name') }}</label>
                                                    <input type="text" class="form-control rounded-0" value="{{ auth()->user()->f_name }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.last name') }}</label>
                                                    <input type="text" class="form-control rounded-0" value="{{ auth()->user()->l_name }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.e-mail') }}</label>
                                                    <input type="email" class="form-control rounded-0" value="{{ auth()->user()->email }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.phone number') }}</label>
                                                    <input type="tel" class="form-control rounded-0" value="{{ auth()->user()->phone }}" disabled>
                                                </div>
                                                <h2 class="h5 mb-0">Address</h2>
                                                <div class="my-3 border-bottom"></div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.region') }}</label>
                                                    <input autocomplete="off" list="regions" name="region" id="region" value="{{ old('region') }}" class="form-control rounded-0" placeholder="{{ __('content.enter region') }}">
                                                    @error('region')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <datalist id="regions">
                                                    </datalist>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.city') }}</label>
                                                    <input autocomplete="off" list="citys" name="city" id="city" value="{{ old('city') }}" class="form-control rounded-0" placeholder="{{ __('content.enter city') }}">
                                                    @error('city')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <datalist id="citys">
                                                    </datalist>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.district') }}</label>
                                                    <input autocomplete="off" list="districts" name="district" id="district" value="{{ old('district') }}" class="form-control rounded-0" placeholder="{{ __('content.enter district') }}">
                                                    @error('district')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <datalist id="districts">
                                                    </datalist>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Zip/Postal Code</label>
                                                    <input type="text" name="zip" class="form-control rounded-0" value="{{ old('zip') }}">
                                                    @error('zip')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">{{ __('content.address') }}</label>
                                                    <input type="text" class="form-control rounded-0" name="address" value="{{ old('address') }}">
                                                    @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="save_address" name="save_address" checked="">
                                                    <label class="form-check-label" for="save_address">Save new Address</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 class="mb-0 h5">Billing Address</h6>
                                                    <div class="my-3 border-bottom"></div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck" checked="">
                                                        <label class="form-check-label" for="gridCheck">Same as shipping address</label>
                                                    </div>
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
                                                            Proceed to Checkout<i class="bx bx-chevron-right"></i>
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
                    <div class="col-12 col-xl-4">
                        <div class="order-summary">
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="card rounded-0 border bg-transparent shadow-none">
                                        <div class="card-body">
                                            <p class="fs-5 text-white">{{ __('content.apply discount code') }}</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-0" placeholder="{{ __('content.enter discount code') }}">
                                                <button class="btn btn-light btn-ecomm" type="button">{{ __('content.apply discount code') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 border bg-transparent shadow-none">
                                        <div class="card-body">
                                            <p class="fs-5 text-white">Order summary</p>

                                            @foreach (\Cart::getContent() as $item)
                                            @include('site.includes.cards.cart-checkout')
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                        <div class="card-body">
                                            <p class="mb-2">{{ __('content.subtotal') }}: <span class="float-end">{{ currency(getNumbers()['subTotal']) }}</span>
                                            </p>
                                            <p class="mb-2">{{ __('content.shipping') }}: <span class="float-end">--</span>
                                            </p>
                                            <p class="mb-2">{{ __('content.taxes') }} ({{ config('shopping_cart.tax')."%" }}): <span class="float-end">{{ currency(getNumbers()['newTax']) }}</span>
                                            </p>
                                            <p class="mb-0">{{ __('content.discount') }}: <span class="float-end">--</span>
                                            </p>
                                            <div class="my-3 border-top"></div>
                                            <h5 class="mb-0">{{ __('content.total') }}: <span class="float-end">{{ currency(getNumbers()['newTax']) }}</span></h5>
                                        </div>
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
@endsection

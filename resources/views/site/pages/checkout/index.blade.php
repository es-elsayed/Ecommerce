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
                                        <h2 class="h5 mb-0">Address</h2>
                                        <div class="my-3 border-bottom"></div>
                                        <div class="form-body">
                                            <form class="row g-3">
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
                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.region') }}</label>
                                                    <input autocomplete="off" list="search_region" name="search_region" id="region" class="form-control rounded-0" placeholder="{{ __('content.enter region') }}">
                                                    <datalist id="search_region">
                                                    </datalist>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">State/Province</label>
                                                    <select class="form-select rounded-0">
                                                        <option>United Kingdom</option>
                                                        <option>California</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Zip/Postal Code</label>
                                                    <input type="text" class="form-control rounded-0">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">{{ __('content.address') }}</label>
                                                    <input type="text" class="form-control rounded-0" value="">
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
                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-chevron-left"></i>Back to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm">Proceed to Checkout<i class="bx bx-chevron-right"></i></a>
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
@section('extra-js')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<script>


$(document).ready(function(){
    $('#region').on('keyup',function(){
        var query = $(this).val();
        $.ajax({
            url:"{{ route('site.search.region') }}",
            type: "GET",
            data: {'search':query},
            // dataType:'json',
            success: function(data){
                // console.log(path);
                $('#search_region').html(data);
            }
        })
    })
})













</script>
@endsection

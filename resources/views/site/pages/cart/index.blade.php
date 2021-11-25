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
                            <div class="card rounded-0 border bg-transparent shadow-none">
                                <div class="card-body">
                                    <p class="fs-5 text-white">Apply Discount Code</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control rounded-0"
                                            placeholder="Enter discount code">
                                        <button class="btn btn-light btn-ecomm" type="button">Apply Discount</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border bg-transparent shadow-none">
                                <div class="card-body">
                                    <p class="fs-5 text-white">Estimate Shipping and Tax</p>
                                    <div class="my-3 border-top"></div>
                                    <div class="mb-3">
                                        <label class="form-label">Country Name</label>
                                        <select class="form-select rounded-0">
                                            <option selected="">United States</option>
                                            <option value="1">Australia</option>
                                            <option value="2">India</option>
                                            <option value="3">Canada</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">State/Province</label>
                                        <select class="form-select rounded-0">
                                            <option selected="">California</option>
                                            <option value="1">Texas</option>
                                            <option value="2">Canada</option>
                                        </select>
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Zip/Postal Code</label>
                                        <input type="email" class="form-control rounded-0">
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                <div class="card-body">
                                    <p class="mb-2">Subtotal: <span class="float-end">$198.00</span>
                                    </p>
                                    <p class="mb-2">Shipping: <span class="float-end">--</span>
                                    </p>
                                    <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                                    </p>
                                    <p class="mb-0">Discount: <span class="float-end">--</span>
                                    </p>
                                    <div class="my-3 border-top"></div>
                                    <h5 class="mb-0">Order Total: <span class="float-end">212.00</span></h5>
                                    <div class="my-4"></div>
                                    <div class="d-grid"> <a href="javascript:;" class="btn btn-white btn-ecomm">Proceed
                                            to Checkout</a>
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

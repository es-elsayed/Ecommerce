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
                        <div class="checkout-shipping">
                            <div class="card bg-transparent rounded-0 shadow-none">
                                @include('site.includes.cards.cart-track')
                            </div>
                            <div class="card rounded-0 shadow-none">
                                <form action="{{ route('site.shipping.store') }}" method="POST" class="card-body">
                                    @csrf
                                    <h2 class="h5 mb-0">Choose Shipping Method</h2>
                                    <div class="my-3 border-bottom"></div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Method</th>
                                                    <th>Time</th>
                                                    <th>Fee</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="radio" id="flat_shipping" name="shipping" value="flat" checked>
                                                        <label class="form-check-label" for="flat_shipping">Flat Rate</label>
                                                    </td>
                                                    <td>2 days</td>
                                                    <td>{{ currency($shipping_price->shipping_price) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input class="form-check-input" type="radio" id="fast_shipping" name="shipping" value="fast">
                                                        <label class="form-check-label" for="fast_shipping">Fast delivery</label>
                                                    </td>
                                                    <td>1 day</td>
                                                    <td>{{ currency($shipping_price->fast_shipping_price) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="d-grid">
                                                <a href="{{ route('site.address.index') }}" class="btn btn-light btn-ecomm">
                                                    <i class="bx bx-chevron-left"></i>Back to details
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-white btn-ecomm">
                                                    Review Order<i class="bx bx-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
</div>
@endsection
@endsection

<x-site.layout :title="__('content.review')">
    <div class="page-content">
        <!--start breadcrumb-->
    <x-site.headers.cart />

        <!--end breadcrumb-->
        <!--start shop cart-->
        <section class="py-4">
            <div class="container">
                <div class="shop-cart">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <div class="checkout-review">
                                <div class="card bg-transparent rounded-0 shadow-none">
                                    @include('site.includes.cards.cart-track')
                                </div>
                                <div class="card  rounded-0 shadow-none">
                                    <div class="card-body">
                                        <h5 class="mb-0">Review Your Order</h5>
                                        <div class="my-3 border-bottom"></div>
                                        @foreach (\Cart::getContent() as $item)
                                        @include('site.includes.cards.cart')

                                        {{-- <div class="row align-items-center g-3">
                                            <div class="col-12 col-lg-6">
                                                <div class="d-lg-flex align-items-center gap-2">
                                                    <div class="cart-img text-center text-lg-start">
                                                        <img src="assets/images/products/01.png" width="130" alt="">
                                                    </div>
                                                    <div class="cart-detail text-center text-lg-start">
                                                        <h6 class="mb-2">White Regular Fit Polo T-Shirt</h6>
                                                        <p class="mb-0">Size: <span>Regular</span>
                                                        </p>
                                                        <p class="mb-2">Color: <span>White &amp; Blue</span>
                                                        </p>
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3">
                                                <div class="cart-action text-center">
                                                    <input type="number" class="form-control rounded-0" value="2"
                                                        min="1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3">
                                                <div class="text-center">
                                                    <div
                                                        class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                                        <a href="javascript:;"
                                                            class="btn btn-light rounded-0 btn-ecomm"><i
                                                                class="bx bx-x-circle me-0"></i></a>
                                                        <a href="javascript:;"
                                                            class="btn btn-light rounded-0 btn-ecomm"><i
                                                                class="bx bx-edit"></i> Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4 border-top"></div> --}}
                                        @endforeach

                                    </div>
                                </div>
                                <div class="card rounded-0 shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="shipping-aadress">
                                                    <h5 class="mb-3">Shipping to:</h5>
                                                    <p class="mb-1">
                                                        <span class="text-light">Customer:</span> {{
                                                        auth()->user()->f_name." ".auth()->user()->l_name }}
                                                    </p>
                                                    <p class="mb-1">
                                                        <span class="text-light">Address:</span> {{
                                                        $address['region'].", ".$address['city'].",
                                                        ".$address['address']." [".$address['zip']."]" }}
                                                    </p>
                                                    <p class="mb-1">
                                                        <span class="text-light">Shipping:</span> {{
                                                        $address['shipping']['method'] }}
                                                    </p>
                                                    <p class="mb-1">
                                                        <span class="text-light">Phone:</span> {{ auth()->user()->phone
                                                        }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0 shadow-none">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-grid">
                                                    <a href="{{ route('site.shipping.index') }}"
                                                        class="btn btn-light btn-ecomm">
                                                        <i class="bx bx-chevron-left"></i>Back to Shipping
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <form class="d-grid" action="{{ route('site.order.store') }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-white btn-ecomm">
                                                        Complete Order<i class="bx bx-chevron-right"></i>
                                                    </button>
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
    </div>
</x-site.layout>

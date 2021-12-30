<footer>
    <section class="py-4 bg-dark-1 border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-section1 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.contact info') }} </h6>
                        <div class="address mb-3">
                            <p class="mb-0 text-uppercase text-white"> {{ __('content.address') }} </p>
                            <p class="mb-0 font-12">123 Street Name, City, Australia</p>
                        </div>
                        <div class="phone mb-3">
                            <p class="mb-0 text-uppercase text-white"> {{ __('content.phone') }} </p>
                            <p class="mb-0 font-13">Toll Free (123) 472-796</p>
                            <p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
                        </div>
                        <div class="email mb-3">
                            <p class="mb-0 text-uppercase text-white"> {{ __('content.email') }} </p>
                            <p class="mb-0 font-13">mail@example.com</p>
                        </div>
                        <div class="working-days mb-3">
                            <p class="mb-0 text-uppercase text-white"> {{ __('content.working days') }} </p>
                            <p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section2 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.shop categories') }} </h6>
                        <ul class="list-unstyled">
                            @foreach (\App\Models\Category::activeParent()->paginate(5) as $main_category)
                            <li class="mb-1">
                                <a href="{{ route('site.shop.show', $main_category->slug) }}" class="tag-link"><i class='bx bx-chevron-right'></i> {{ $main_category->name }} </a>
                            </li>
                            <a href="" class="tag-link">Electronis</a>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section3 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.popular tags') }} </h6>
                        <div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
                            <a href="javascript:;" class="tag-link">Electronis</a>
                            <a href="javascript:;" class="tag-link">Furniture</a>
                            <a href="javascript:;" class="tag-link">Sports</a>
                            <a href="javascript:;" class="tag-link">Men Wear</a>
                            <a href="javascript:;" class="tag-link">Women Wear</a>
                            <a href="javascript:;" class="tag-link">Laptops</a>
                            <a href="javascript:;" class="tag-link">Formal Shirts</a>
                            <a href="javascript:;" class="tag-link">Topwear</a>
                            <a href="javascript:;" class="tag-link">Headphones</a>
                            <a href="javascript:;" class="tag-link">Bottom Wear</a>
                            <a href="javascript:;" class="tag-link">Bags</a>
                            <a href="javascript:;" class="tag-link">Sofa</a>
                            <a href="javascript:;" class="tag-link">Shoes</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section4 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.stay informed') }} </h6>
                        <div class="subscribe">
                            <input type="text" class="form-control radius-30" placeholder="{{ __('content.enter')." ".__('content.email') }}" />
                            <div class="mt-2 d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm radius-30">{{ __('content.subscribe') }}</a>
                            </div>
                            <p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
                        </div>
                        <div class="download-app mt-3">
                            <h6 class="mb-3 text-uppercase">Download our app</h6>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/site/images/icons/apple-store.png') }}" class="" width="160" alt="" />
                                </a>
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/site/images/icons/play-store.png') }}" class="" width="160" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <hr/>
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <p class="mb-0">Copyright © 2021. All right reserved.</p>
                </div>
                <div class="col text-end">
                    <div class="payment-icon">
                        <div class="row row-cols-auto g-2 justify-content-end">
                            <div class="col">
                                <img src="{{ asset('assets/site/images/icons/visa.png') }}" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/site/images/icons/paypal.png') }}" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/site/images/icons/mastercard.png') }}" alt="" />
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/site/images/icons/american-express.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
</footer>

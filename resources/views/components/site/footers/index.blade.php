@props(['maincategories','site-info'])
<footer>
    <section class="py-4 bg-dark-1 border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-section1 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.contact info') }} </h6>
                        <x-site.cards.contact-info :site-info="$siteInfo" />
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section2 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.shop categories') }} </h6>
                        <ul class="list-unstyled">
                            @foreach ($maincategories as
                            $main_category)
                            <li class="mb-1">
                                <a href="{{ route('site.shop.show', $main_category->slug) }}" class="tag-link"><i
                                        class='bx bx-chevron-right'></i> {{ $main_category->name }} </a>
                            </li>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <x-site.tags/>
                <div class="col">
                    <div class="footer-section4 mb-3">
                        <h6 class="mb-3 text-uppercase"> {{ __('content.stay informed') }} </h6>
                        <div class="subscribe">
                            <input type="text" class="form-control radius-30"
                                placeholder="{{ __('content.enter')." ".__('content.email') }}" />
                            <div class="mt-2 d-grid"> <a href="javascript:;"
                                    class="btn btn-white btn-ecomm radius-30">{{ __('content.subscribe') }}</a>
                            </div>
                            <p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers,
                                updates and new products info.</p>
                        </div>
                        <div class="download-app mt-3">
                            <h6 class="mb-3 text-uppercase">Download our app</h6>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/site/images/icons/apple-store.png') }}" class=""
                                        width="160" alt="" />
                                </a>
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/site/images/icons/play-store.png') }}" class=""
                                        width="160" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <hr />
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <p class="mb-0">Copyright © 2022 |  All rights reserved by <strong><a href="https://twision.dev" style="color: #033E8C">Twision</a></strong>.</p>
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

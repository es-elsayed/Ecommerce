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
                        <p class="fs-5 text-white">{{ __("content.order summary") }}</p>

                        @foreach (\Cart::getContent() as $item)
                        @include('site.includes.cards.cart-checkout')
                        @endforeach

                    </div>
                </div>
                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                    <div class="card-body">
                        <p class="mb-2">{{ __('content.subtotal') }}: <span class="float-end">{{ currency(getNumbers()['subTotal']) }}</span>
                        </p>
                        <p class="mb-2">{{ __('content.shipping') }}: <span class="float-end">{{ currency(getNumbers()['shipping_price']) }}</span>
                        </p>
                        <p class="mb-2">{{ __('content.taxes') }} ({{ config('shopping_cart.tax')."%" }}): <span class="float-end">{{ currency(getNumbers()['newTax']) }}</span>
                        </p>
                        <p class="mb-0">{{ __('content.discount') }}: <span class="float-end">{{ currency(getNumbers()['discount']) }}</span>
                        </p>
                        <div class="my-3 border-top"></div>
                        <h5 class="mb-0">{{ __('content.total') }}: <span class="float-end">{{ currency(getNumbers()['newTotal']) }}</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

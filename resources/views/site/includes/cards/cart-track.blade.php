
<div class="card-body">
    <div class="steps steps-light">
        <a class="step-item active" href="{{ route('site.cart.list') }}">
            <div class="step-progress"><span class="step-count">1</span>
            </div>
            <div class="step-label"><i class="bx bx-cart"></i>Cart</div>
        </a>
        <a class="step-item
        @switch(Route::currentRouteName())
        @case("site.address.index")
            active current
        @break
        @default
            active
        @break
        @endswitch
        "
        href="{{ route('site.address.index') }}">
            <div class="step-progress"><span class="step-count">2</span>
            </div>
            <div class="step-label"><i class="bx bx-user-circle"></i>Details</div>
        </a>
        <a class="step-item
        @switch(Route::currentRouteName())
        @case("site.checkout.checkout")
            active current
        @break
        @case("site.shipping.index")
            active
        @break
        @case("site.order.index")
            active
        @break
        @endswitch
        " href="{{ route('site.shipping.index') }}">
            <div class="step-progress"><span class="step-count">3</span>
            </div>
            <div class="step-label"><i class="bx bx-cube"></i>Shipping</div>
        </a>
        <a class="step-item
        @switch(Route::currentRouteName())
        @case("site.order.index")
            active current
        @break
        @case("site.checkout.payment")
            active
        @break
        @endswitch
        " href="">
            <div class="step-progress"><span class="step-count">4</span>
            </div>
            <div class="step-label"><i class="bx bx-check-circle"></i>Review</div>
        </a>
        <a class="step-item" href="checkout-payment.html">
            <div class="step-progress"><span class="step-count">5</span>
            </div>
            <div class="step-label"><i class="bx bx-credit-card"></i>Payment</div>
        </a>
    </div>
</div>


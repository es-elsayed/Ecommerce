@php
$cart_prod = \App\Models\Product::getProductById($item->id)
@endphp
<a class="dropdown-item" href="javascript:;">
    <div class="d-flex align-items-center">
        <div class="flex-grow-1">
            <h6 class="cart-product-title">{{ $cart_prod->name }}</h6>
            <p class="cart-product-price">{{ $item->quantity }} x {{
                $cart_prod->sale === 1 ? currency($cart_prod->sale_price) : currency($cart_prod->price) }}</p>
        </div>
        <div class="position-relative">
            {{-- <div> --}}
                <form class="position-absolute" action="{{ route('site.cart.remove') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="id">
                    <button type="submit"  class="cart-product-cancel position-absolute"><i class='bx bx-x'></i></button>
                </form>
            {{-- </div> --}}
            <div class="cart-product">
                <img src="{{ asset($cart_prod->main_image) }}"
                    class="" alt="product image">
            </div>
        </div>
    </div>
</a>

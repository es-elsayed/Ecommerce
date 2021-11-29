@php
$cart_prod = \App\Models\Product::getProductById($item->id)
@endphp
<div class="my-3 border-top"></div>
<div class="d-flex align-items-center">
    <a class="d-block flex-shrink-0" href="javascript:;">
        <img src="{{ asset($cart_prod->main_image) }}" width="75" alt="Product">
    </a>
    <div class="ps-2">
        <h6 class="mb-1"><a href="javascript:;">{{ $cart_prod->name }}</a></h6>
        <div class="widget-product-meta"><span class="me-2">{{ $cart_prod->sale === 1 ? currency($cart_prod->sale_price) : currency($cart_prod->price) }}</span><span class="">x <small>{{ $item->quantity }}</small></span>
        </div>
    </div>
</div>

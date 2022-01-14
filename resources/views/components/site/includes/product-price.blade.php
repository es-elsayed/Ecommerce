@props(['product'])
<div class="mb-1 product-price">
    @if ($product->sale)
    <span class="me-1 text-decoration-line-through">{{ currency($product->price) }}</span>
    <span class="text-white fs-5">{{ currency($product->sale_price) }}</span>
    @else
    <span class="text-white fs-5">{{ currency($product->price) }}</span>
    @endif
</div>

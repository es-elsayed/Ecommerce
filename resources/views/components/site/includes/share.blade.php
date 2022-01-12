@props(['product'])
<div class="product-sharing">
    <ul class="list-inline">
        <li class="list-inline-item">
            <a class="nav-link"
                href="https://www.facebook.com/sharer/sharer.php?u=http%3A//twision-ecommerce.test/en/shop/product/{{ $product->slug }}">
                <i class="bx bxl-facebook"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="nav-link"
                href="https://twitter.com/intent/tweet?text=http%3A//twision-ecommerce.test/en/shop/product/{{ $product->slug }}">
                <i class="bx bxl-twitter"></i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="nav-link" href="javascript:;" type="button" onclick="Copy();">
                <i class='bx bx-link'></i>
            </a>
        </li>
    </ul>
    <span id="custom-tooltip"></span>
</div>

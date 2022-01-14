@props(['product'])
<div class="card rounded-0 product-card">
    <div class="card-header bg-transparent border-bottom-0">
        <div class="d-flex align-items-center justify-content-end">
            <x-site.includes.fav-heart-icon :id="$product->id" :name="$product->name" />
        </div>
    </div>
    <a href="{{ route('shop.product.show',$product->slug) }}">
        <img src="{{ asset($product->main_image) }}" class="card-img-top" alt="...">
    </a>
    <div class="card-body">
        <div class="product-info">
            <a href="{{ route('shop.product.show',$product->slug) }}">
                <h6 class="product-name mb-2">{{ $product->name }}</h6>
            </a>
            <div class="d-flex align-items-center">
                <x-site.includes.product-price :product="$product" />
            </div>
            <div class="product-action mt-2">
                <div class="d-grid gap-2">
                    <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class="bx bxs-cart-add"></i>Add to
                        Cart</a>
                    {{-- <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal"
                        data-bs-target="#QuickViewProduct">
                        <i class="bx bx-zoom-in"></i>Quick View
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

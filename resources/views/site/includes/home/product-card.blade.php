<div class="col">
    <div class="card rounded-0 product-card">
        <div class="card-header bg-transparent border-bottom-0">
            <div class="d-flex align-items-center justify-content-end gap-3">
                <a href="javascript:;">
                    <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span>
                    </div>
                </a>
                <a href="" data-name[{{ $loop->iteration }}]="{{ $product->name_en }}" class="anchor">
                    <div class="product-wishlist"> <i class="bx bx-heart"></i>
                    </div>
                </a>
            </div>
        </div>
        <a href="product-details.html">
            <img src="assets/site/images/products/01.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <div class="product-info">
                {{-- <a href="javascript:;">
                    <p class="product-catergory font-13 mb-1">{{ $product->parent->name_en }}</p>
                </a> --}}
                <a href="javascript:;">
                    <h6 class="product-name mb-2">{{ $product->name_en }}</h6>
                </a>
                <div class="d-flex align-items-center">
                    <div class="mb-1 product-price">
                        @if ($product->sale)
                        <span class="me-1 text-decoration-line-through">{{ currency($product->price) }}</span>
                        <span class="text-white fs-5">{{ currency($product->sale_price) }}</span>
                        @else
                        <span class="text-white fs-5">{{ currency($product->price) }}</span>
                        @endif
                    </div>
                    {{-- <div class="cursor-pointer ms-auto">	<i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                    </div> --}}
                </div>
                <div class="product-action mt-2">
                    <div class="d-grid gap-2">
                        <a href="javascript:;" class="btn btn-light btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class="bx bx-zoom-in"></i>Quick View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('extra-js')
<script>
    const anchors = document.querySelectorAll('.anchor');
    const deleted_array = [];
    anchors.forEach((anchor)=>{
        anchor.addEventListener('click', (e)=>{
            e.preventDefault()
            document.cookie = anchor.dataset
            console.log(document.cookie);
        })
    })
</script>
@endsection

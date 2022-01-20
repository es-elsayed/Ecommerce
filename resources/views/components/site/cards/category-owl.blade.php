@props(['category'])
<div class="owl-item" style="width: 271.505px; margin-right: 10px;">
    <a href="{{ route('site.shop.show',$category->slug) }}">
        <div class="item">
            <div class="card rounded-0 product-card m-0 border">
                <div class="card-body">
                    <img src="{{ asset($category->image) }}" class="img-fluid" alt="...">
                </div>
                <div class="card-footer text-center">
                    <h6 class="mb-1 text-uppercase">{{ $category->name }}</h6>
                    <!-- <p class="mb-0 font-12 text-uppercase">20 Products</p> -->
                </div>
            </div>
        </div>
    </a>
</div>

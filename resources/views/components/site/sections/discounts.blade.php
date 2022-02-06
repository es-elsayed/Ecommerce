@props(['discounts'])
<section class="py-4">
    <div class="container">
        <div class="add-banner">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                @foreach ($discounts as $discount )
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 border shadow-none">
                        <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-{{ $discount->discount }}%</span>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{ asset($discount->image) }}" class="w-100 h-auto" alt="...">
                            <h5 class="card-title fs-1 text-uppercase">Super Sale</h5>
                            <p class="card-text text-uppercase fs-4 lh-1 mb-2">Up to {{ $discount->discount }}% off</p>
                            <p class="card-text">On {{ $discount->category->name }}</p> <a href="{{ route('site.shop.show',[$discount->category->slug,'sort'=>'discount']) }}" class="btn btn-dark btn-ecomm">HURRY UP!</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
    </div>
</section>

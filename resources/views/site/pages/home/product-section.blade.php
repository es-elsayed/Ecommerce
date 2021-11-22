<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">FEATURED PRODUCTS</h5>
            <a href="{{ route('site.shop') }}" class="btn btn-light ms-auto rounded-0">More Products<i class="bx bx-chevron-right"></i></a>
        </div>
        <hr>
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            @foreach ($products as $product )
            @include('site.includes.product.product-card')
            @endforeach
            </div>
            <!--end row-->
        </div>
    </div>
</section>

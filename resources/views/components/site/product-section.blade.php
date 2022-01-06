@props(['products','name','route'])
<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">{{ $name }}</h5>
            <x-site.a class="btn-dark" href='{{ $route }}'>
                {{ __('content.more products') }}<i class="bx bx-chevron-right"></i>
            </x-site.a>
        </div>
        <hr>
        <div class="product-grid">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @foreach ($products as $product )
                {{-- <x-site.includes.slider :sliders="$sliders" /> --}}
                @include('site.includes.cards.product')
                @endforeach
            </div>
            <!--end row-->
        </div>
    </div>
</section>

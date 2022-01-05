<x-site.layout>
    <x-slot name="title">
        {{ __('content.home') }}
    </x-slot>
    @if (count($sliders)>0)
    @include('site.includes.extra.slider')
    @endif
    @if (count($featuredProducts)>0)
    <section class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase mb-0">{{ __('content.featured products') }}</h5>
                <a href="{{ route('site.shop.index') }}" class="btn btn-light ms-auto rounded-0">
                {{ __('content.more products') }}<i class="bx bx-chevron-right"></i></a>
            </div>
            <hr>
            <div class="product-grid">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                    @foreach ($featuredProducts as $product )
                    @include('site.includes.cards.product')
                    @endforeach
                </div>
                <!--end row-->
            </div>
        </div>
    </section>

    @endif
</x-site.layout>

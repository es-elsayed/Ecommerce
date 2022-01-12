<x-site.layout>
    <x-slot name="title">
        {{ __('content.shop') }}
    </x-slot>

    <!--start breadcrumb-->
    <x-site.headers.breadcrumb title="{{ __('content.shop') }}">
        <li class="breadcrumb-item">
            <a href="{{ route('site.home.index') }}">
                <i class="bx bx-home-alt"></i>
                {{ __('content.home') }}
            </a>
        </li>
    </x-site.headers.breadcrumb>
    <!--end breadcrumb-->
    <!--start shop categories-->
    <section class="py-4">
        <div class="container">
            <div class="product-categories">
                <div class="row row-cols-1 row-cols-lg-4">
                    @foreach ($categories as $category )
                    @include('site.includes.cards.category')
                    @endforeach
                </div>
                <!--end row-->
            </div>
        </div>
    </section>
    <div class="links">
        {{ $categories->links() }}
    </div>
    <!--end shop categories-->
</x-site.layout>

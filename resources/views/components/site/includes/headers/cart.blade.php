<section class="py-3 border-bottom d-none d-md-flex">
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center">
            <h3 class="breadcrumb-title pe-3">{{ __('content.cart') }}</h3>
            <div class="ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('site.home.index') }}"><i class="bx bx-home-alt"></i>{{ __('content.home') }}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('site.shop.index') }}">{{ __('content.shop') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('content.cart') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

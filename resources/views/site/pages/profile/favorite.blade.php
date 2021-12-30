@extends('layouts.site')
@section('title')
{{ __('content.favorite') }}
@endsection
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom d-none d-md-flex">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">{{ __('content.favorite') }}</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>{{ __('content.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('content.favorite') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--end breadcrumb-->
    <!--start shop area-->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="product-wrapper">
                        <div class="product-grid">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                                @forelse ($products as $product )
                                @include('site.includes.cards.product')
                                @empty
                                <div>{{ __('content.favorite')." ".__('content.is empty') }}</div>
                                @endforelse
                            </div>
                            <!--end row-->
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end shop area-->
</div>
@endsection

@extends('layouts.site')
@section('title')
{{ __('content.shop') }}
@endsection
@section('content')
<!--start breadcrumb-->
<section class="py-3 border-bottom d-none d-md-flex">
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center">
            <h3 class="breadcrumb-title pe-3">{{ $product->name }}</h3>
            <div class="ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('site.home.index') }}">
                                <i class="bx bx-home-alt"></i>
                                {{ __('content.home') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('site.shop.index') }}">
                                {{ __('content.shop') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $product->name }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--end breadcrumb-->
<!--start product detail-->
<section class="py-4">
    <div class="container">
        <div class="product-detail-card">
            <div class="product-detail-body">
                <div class="row g-0">
                    <div class="col-12 col-lg-5">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3 owl-loaded owl-drag"
                                data-slider-id="1">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1032px, 0px, 0px); transition: all 0s ease 0s; width: 4128px;">
                                        <div class="owl-item active" style="width: 506px; margin-right: 10px;">
                                            <div class="item">
                                                <img src="{{ asset($product->main_image) }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        @foreach ($product->images as $prod_image )
                                        <div class="owl-item" style="width: 509.5px; margin-right: 10px;">
                                            <div class="item">
                                                <img src="{{ asset($prod_image->image) }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><span aria-label="Previous">‹</span></button><button
                                        type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button></div>
                                <div class="owl-dots disabled"></div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                <button class="owl-thumb-item active">
                                    <img src="{{ asset($product->main_image) }}" class="img-fluid" alt="">
                                </button>
                                @foreach ($product->images as $prod_image )
                                <button class="owl-thumb-item">
                                    <img src="{{ asset($prod_image->image) }}" class="img-fluid" alt="">
                                </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">{{ $product->name }}</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                                @if (count($reviews))
                                <div class="rates cursor-pointer font-13">
                                    <x-site.cards.rate :rate="round($reviews->sum('rate')/count($reviews))" />
                                </div>
                                @endif
                                <div class="ms-1">
                                    <p class="mb-0">({{ reviewsCount($reviews) }}) Ratings</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                @if ($product->sale)
                                <h5 class="mb-0 text-decoration-line-through text-light-3">{{ currency($product->price)
                                    }}</h5>
                                <h4 class="mb-0">{{ currency($product->sale_price) }}</h4>
                                @else
                                <h4 class="mb-0">{{ currency($product->price) }}</h4>
                                @endif
                            </div>
                            <div class="mt-3">
                                <h6>{{ __('content.details') }} :</h6>
                                <p class="mb-0">{{ $product->details}}</p>
                            </div>
                            <dl class="row mt-3">
                                <dt class="col-sm-3">sku: </dt>
                                <dd class="col-sm-9">{{ $product->sku}}</dd>
                                {{-- <dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe</dd> --}}
                            </dl>
                            {{-- <div class="row row-cols-auto align-items-center mt-3">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <select class="form-select form-select-sm">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Size</label>
                                    <select class="form-select form-select-sm">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XS</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Colors</label>
                                    <div class="color-indigators d-flex align-items-center gap-2">
                                        <div class="color-indigator-item bg-primary"></div>
                                        <div class="color-indigator-item bg-danger"></div>
                                        <div class="color-indigator-item bg-success"></div>
                                        <div class="color-indigator-item bg-warning"></div>
                                    </div>
                                </div>
                            </div> --}}
                            <!--end row-->
                            <form action="{{ route('site.cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->main_image }}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="btn btn-light btn-ecomm w-100"> <i class="bx bxs-cart-add"></i>
                                    {{ __('content.add to cart') }}
                                </button>
                            </form>
                            <hr>
                            <div class="product-sharing">

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a
                                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A//twision-ecommerce.test/en/shop/product/{{ $product->slug }}">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a
                                            href="https://twitter.com/intent/tweet?text=http%3A//twision-ecommerce.test/en/shop/product/{{ $product->slug }}">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:;" type="button" onclick="Copy();">
                                            <i class='bx bx-link'></i>
                                        </a>
                                    </li>
                                    {{-- <li class="list-inline-item"> <a href="javascript:;"><i
                                                class="bx bxl-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"> <a href="javascript:;"><i
                                                class="bx bxl-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item"> <a href="javascript:;"><i
                                                class="bx bxl-google"></i></a>
                                    </li> --}}
                                </ul>
                                <span id="custom-tooltip"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</section>
<!--end product detail-->
<!--start product more info-->
<section class="py-4">
    <div class="container">
        <div class="product-more-info">
            <ul class="nav nav-tabs mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#discription" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">{{ __('content.description') }}</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-title text-uppercase fw-500">({{ reviewsCount($reviews) }}) Reviews</div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content pt-3">
                <div class="tab-pane fade show active" id="discription" role="tabpanel">
                    {{$product->description}}
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <div class="row">
                        <div class="col col-lg-8">
                            <div class="product-review">

                                <h5 class="mb-4"> ({{ reviewsCount($reviews) }}) Reviews For The Product</h5>
                                <div class="review-list">
                                    @foreach ($reviews as $review )
                                    <x-site.cards.review :review="$review" />

                                    <hr>
                                    @endforeach
                                    @if (in_array(auth()->user()->id,$orders) &&
                                    !in_array(auth()->user()->id,$reviews->pluck('user_id')->toArray()) )
                                    <x-site.forms.review :id="$product->id " />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
</section>
<!--end product more info-->
@endsection
@section('extra-js')
<script>
    function Copy() {
            var dummy = document.createElement('input'),
            text = window.location.href;
            document.body.appendChild(dummy);
            dummy.value = text;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
            document.getElementById("custom-tooltip").innerText = "Link Copied Successfully!";
                setTimeout( function() {
            document.getElementById("custom-tooltip").innerText = "";
        }, 1000);
        }
</script>
@endsection

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
            <img src="{{ asset($product->main_image) }}" class="card-img-top" alt="...">
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
                    {{-- <div class="cursor-pointer ms-auto"> <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                        <i class="bx bxs-star text-white"></i>
                    </div> --}}
                </div>
                <div class="product-action mt-2">
                    <div class="d-grid gap-2">
                        <form action="{{ route('site.cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name_en }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->main_image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-light btn-ecomm w-100"> <i class="bx bxs-cart-add"></i>Add To Cart</button>
                    </form>
{{--
                        <a href="javascript:;" class=""> <i class="bx bxs-cart-add"></i>Add to
                            Cart</a> --}}
                        <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal"
                            data-bs-target="#QuickViewProduct-{{ $loop->iteration }}"><i class="bx bx-zoom-in"></i>Quick
                            View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ======================= Start Pop up details==================== --}}
<div class="modal fade show" id="QuickViewProduct-{{ $loop->iteration }}" style="padding-right: 15px; display: none;"
    aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content bg-dark-4 rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3 owl-loaded owl-drag"
                                data-slider-id="1">




                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1039px, 0px, 0px); transition: all 0s ease 0s; width: 4156px;">
                                        <div class="owl-item active" style="width: 509.5px; margin-right: 10px;">
                                            <div class="item">
                                                <img src="{{ asset($product->main_image) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                        @foreach ($product->images as $prod_image )
                                        <div class="owl-item" style="width: 509.5px; margin-right: 10px;">
                                            <div class="item">
                                                <img src="{{ asset($prod_image->image) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span aria-label="Previous">‹</span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                <button class="owl-thumb-item active">
                                    <img src="{{ asset($product->main_image) }}" class="" alt="">
                                </button>
                                @foreach ($product->images as $prod_image )
                                <button class="owl-thumb-item active">
                                    <img src="{{ asset($prod_image->image) }}" class="" alt="">
                                </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">{{ $product->name_en }}</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                                <div class="rates cursor-pointer font-13"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-light-4"></i>
                                </div>
                                <div class="ms-1">
                                    <p class="mb-0">(24 Ratings)</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
                                <h4 class="mb-0">$49.00</h4>
                            </div>
                            <div class="mt-3">
                                <h6>Discription :</h6>
                                <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that
                                    continues to break away from the conventions of mainstream fashion. Made in Italy,
                                    these black and brown Odsy-1000 low-top sneakers.</p>
                            </div>
                            <dl class="row mt-3">
                                <dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">#BHU5879</dd>
                                <dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe</dd>
                            </dl>
                            <div class="row row-cols-auto align-items-center mt-3">
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
                            </div>
                            <!--end row-->
                            <div class="d-flex gap-2 mt-3">
                                <form action="{{ route('site.cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="btn btn-white btn-ecomm"> <i class="bx bxs-cart-add"></i>Add To Cart</button>
                                </form>
                                {{-- <a href="javascript:;" class="">Add to Cart</a> --}}
                                <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to
                                    Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
{{-- ======================= End Pop up details==================== --}}


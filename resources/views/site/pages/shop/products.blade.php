@extends('layouts.site')
@section('title')
Shop
@endsection
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    @include('site.includes.shop.header')
    <!--end breadcrumb-->
    <!--start shop area-->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-3">
                    <div class="btn-mobile-filter d-xl-none"><i class="bx bx-slider-alt"></i>
                    </div>
                    <div class="filter-sidebar d-none d-xl-flex">
                        <div class="card rounded-0 w-100">
                            <div class="card-body">
                                <div class="align-items-center d-flex d-xl-none">
                                    <h6 class="text-uppercase mb-0">Filter</h6>
                                    <div class="btn-mobile-filter-close btn-close ms-auto cursor-pointer"></div>
                                </div>
                                <hr class="d-flex d-xl-none">
                                <div class="product-categories">
                                    <h6 class="text-uppercase mb-3">Other Categories</h6>
                                    <ul class="list-unstyled mb-0 categories-list">
                                        @foreach ($sub_categories as $sub_category)
                                        <li>
                                            <a href="{{ route('site.category.show', $sub_category->slug) }}">{{ $sub_category->name_en }}
                                                {{-- <span class="float-end badge rounded-pill bg-light">42</span> --}}
                                            </a>
                                        </li>
                                        <hr>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="size-range">
                                    <h6 class="text-uppercase mb-3">Sort By Price</h6>
                                            <div class="form-check">
                                                <input class="form-check-input sort" type="radio" data-sort="default" name="sort" @if(!request()->has('sort')) checked @endif>
                                                <a href="{{ route('site.category.show',$category->slug) }}" id="id1">Default</a>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input sort" type="radio" data-sort="low-to-high" name="sort" @if(request()->get('sort')=='low-to-high') checked @endif>
                                                <a href="{{ route('site.category.show',['slug'=>$category->slug,'sort'=>'low-to-high']) }}" id="id2">Low to High</a>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input sort" type="radio" data-sort="high-to-low" name="sort" @if(request()->get('sort')=='high-to-low') checked @endif>
                                                <a href="{{ route('site.category.show',['slug'=>$category->slug,'sort'=>'high-to-low']) }}" id="id3">High to Low</a>
                                            </div>
                                </div>
                                {{--
                                <hr>
                                <div class="size-range">
                                    <h6 class="text-uppercase mb-3">Size</h6>
                                    <ul class="list-unstyled mb-0 categories-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Small">
                                                <label class="form-check-label" for="Small">Small</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Medium">
                                                <label class="form-check-label" for="Medium">Medium</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Large">
                                                <label class="form-check-label" for="Large">Large</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="ExtraLarge">
                                                <label class="form-check-label" for="ExtraLarge">Extra Large</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>id2
                                <hr>
                                <div class="product-brands">
                                    <h6 class="text-uppercase mb-3">Brands</h6>
                                    <ul class="list-unstyled mb-0 categories-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Adidas">
                                                <label class="form-check-label" for="Adidas">Adidas (15)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Armani">
                                                <label class="form-check-label" for="Armani">Armani (26)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="CalvinKlein">
                                                <label class="form-check-label" for="CalvinKlein">Calvin Klein
                                                    (24)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Columbia">
                                                <label class="form-check-label" for="Columbia">Columbia (38)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="JhonPlayers">
                                                <label class="form-check-label" for="JhonPlayers">Jhon Players
                                                    (48)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Diesel">
                                                <label class="form-check-label" for="Diesel">Diesel (64)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="product-colors">
                                    <h6 class="text-uppercase mb-3">Colors</h6>
                                    <ul class="list-unstyled mb-0 categories-list">
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-black"></div>
                                                <p class="mb-0 ms-3">Black</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-warning"></div>
                                                <p class="mb-0 ms-3">Yellow</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-danger"></div>
                                                <p class="mb-0 ms-3">Red</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-primary"></div>
                                                <p class="mb-0 ms-3">Blue</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-white"></div>
                                                <p class="mb-0 ms-3">White</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-success"></div>
                                                <p class="mb-0 ms-3">Green</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center cursor-pointer">
                                                <div class="color-indigator bg-info"></div>
                                                <p class="mb-0 ms-3">Sky Blue</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-9">
                    <div class="product-wrapper">
                        {{-- <div class="toolbox d-flex align-items-center mb-3 gap-2">
                            <div class="d-flex flex-wrap flex-grow-1 gap-1">
                                <div class="d-flex align-items-center flex-nowrap">
                                    <p class="mb-0 font-13 text-nowrap text-white">Sort By:</p>
                                    <select class="form-select ms-3 rounded-0">
                                        <option value="menu_order" selected="selected"><a href="{{ route('site.category.show',$category->slug) }}">Default sorting</a></option>
                                        <option value="popularity"><a href="{{ route('site.category.show',$category->slug, ['sort'=>'low to high']) }}">Low to Height</a></option>
                                        <option value="rating"><a href="{{ Request::url().'ll' }}">Height to Low</a></option>
                                    </select>
                                </div>
                            </div>
                             <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center flex-nowrap">
                                    <p class="mb-0 font-13 text-nowrap text-white">Show:</p>
                                    <select class="form-select ms-3 rounded-0">
                                        <option>9</option>
                                        <option>12</option>
                                        <option>16</option>
                                        <option>20</option>
                                        <option>50</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                             <div> <a href="shop-grid-left-sidebar.html" class="btn btn-white rounded-0"><i
                                        class="bx bxs-grid me-0"></i></a>
                            </div>
                            <div> <a href="shop-list-left-sidebar.html" class="btn btn-light rounded-0"><i
                                        class="bx bx-list-ul me-0"></i></a>
                            </div>
                        </div>--}}
                        <div class="product-grid">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                @forelse ($products as $product )
                                @include('site.includes.product.product-card')
                                @empty
                                <div>No Products</div>
                                @endforelse
                            </div>
                            <!--end row-->
                        </div>
                        <hr>

                        {{-- =================== Larvel Pagination =================== --}}
                        {{ $products->links()}}
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end shop area-->
</div>

@endsection
{{-- --}}



@section('extra-js')
<script type="text/javascript">
    // ----------------------------------------------------------
    // ---------------------- For Products ----------------------
    // ----------------------------------------------------------
const sorting_buttons = document.querySelectorAll('.sort');
sorting_buttons.forEach(button => {
    button.addEventListener('click',(e)=>{
        if(e.target.dataset.sort == 'low-to-high') {
                window.location.href = "{{ route('site.category.show',['slug'=>$category->slug,'sort'=>'low-to-high']) }}";
        }
            else if(e.target.dataset.sort == 'high-to-low'){
                window.location.href = "{{ route('site.category.show',['slug'=>$category->slug,'sort'=>'high-to-low']) }}";
            }
            else{
                window.location.href = "{{ route('site.category.show',$category->slug) }}";
            }
    })

});

</script>
<script>
    // --------------------------------------------------------------
    // ---------------------- For Product Card ----------------------
    // --------------------------------------------------------------
    const anchors = document.querySelectorAll('.anchor');
    const deleted_array = [];
    anchors.forEach((anchor)=>{
        anchor.addEventListener('click', (e)=>{
            e.preventDefault()
            document.cookie = anchor.dataset
            console.log(document.cookie);
        })
    })
</script>
@endsection


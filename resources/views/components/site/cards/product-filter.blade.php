@props(['category','categories'])
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
                    <h4 class="text-uppercase fw-bold mb-3">{{ $category->name }}</h4>
                    <ul class="list-unstyled mb-0 categories-list">
                        @foreach ($categories as $sub_category)
                        <li>
                            <a href="{{ route('site.shop.show', $sub_category->slug) }}">{{
                                $sub_category->name}}
                                {{-- <span class="float-end badge rounded-pill bg-light">42</span>
                                --}}
                            </a>
                        </li>
                        @endforeach
                        <hr>
                        <h6 class="text-uppercase mb-3">{{ __('content.sort by price') }}</h6>
                        <li class="form-check">
                            <input class="form-check-input sort" type="radio"
                                data-sort="low-to-high" name="sort"
                                @if(request()->get('sort')=='low-to-high') checked @endif>
                            <a href="{{ route('site.shop.show',[$category->slug,'sort'=>'low-to-high']) }}"
                                id="id1"> {{ __('content.low to high') }} </a>
                        </li>
                        <li class="form-check">
                            <input class="form-check-input sort" type="radio"
                                data-sort="high-to-low" name="sort"
                                @if(request()->get('sort')=='high-to-low') checked @endif>
                            <a href="{{ route('site.shop.show',[$category->slug,'sort'=>'high-to-low']) }}"
                                id="id2"> {{ __('content.high to low') }} </a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                    <a href="{{ route('site.shop.show',$category->slug) }}"
                        class="btn btn-white btn-sm text-uppercase rounded-0 font-13 fw-500"> {{
                        __('content.clear') }} </a>
                    {{-- <button type="button">{{ __('content.clear') }}</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>

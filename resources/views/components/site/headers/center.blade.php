@props(['siteInfo','maincategories'])
<div class="header-content pb-3 pb-md-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i
                            class='bx bx-menu'></i>
                    </div>
                    <div class="logo d-none d-lg-flex">
                        <a href="{{ route('site.home.index') }}">
                            <img src="{{ asset('assets/images/twishop-logo.svg') }}" class="logo-icon" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <form method="get" action="{{ route('site.products.search') }}" class="col-12 col-md order-4 order-md-2">
                {{-- @csrf --}}
                <div class="input-group flex-nowrap px-xl-4">
                    <input type="text" name="product" value="{{ request('product') }}" class="form-control w-100" placeholder="Search for Products">
                    <select class="form-select flex-shrink-0" name="category" aria-label="Default select example" style="width: 10.5rem;">
                        <option value="">All Categories</option>
                        @foreach ($maincategories as $category )
                        <option value="{{ $category->slug }}" @if (request('category') == $category->slug)
                            selected
                        @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="input-group-text cursor-pointer"><i class="bx bx-search"></i></button>
                </div>
            </form>
            {{-- <div class="col-12 col-md order-4 order-md-2">
                <div class="input-group flex-nowrap px-xl-4 position-relative">
                    <input autocomplete="off" list="products" name="product" id="product" class="form-control w-100"
                        placeholder="{{ __('content.search for products') }}">
                    <ul style="z-index: 100; color:white; background-color: rgb(0 0 0 / 84%);" class="navbar-nav position-absolute top-100 w-75" id="products">
                    </ul>
                    <label for="product" class="input-group-text cursor-pointer"><i class='bx bx-search'></i></label>
                </div>
            </div> --}}

            @if (isset($siteInfo->phone))

            <div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
                <div class="fs-1 text-white"><i class='bx bx-headphone'></i>
                </div>
                <div class="ms-2">
                    <p class="mb-0 font-13">{{ __('content.call us') }}</p>
                    <h5 class="mb-0 d-ltr">
                        <a class="nav-link" href="tel:{{ $siteInfo->phone }}">{{ $siteInfo->phone }}</a>
                    </h5>
                </div>
            </div>
            @endif
            <div class="col col-md-auto order-2 order-md-4">
                <div class="top-cart-icons">
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="{{ route('site.profile.index') }}"
                                    class="nav-link cart-link">

                                    <i class='bx bx-{{ auth()->user()? 'user':'log-in'  }}'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('site.favorite.index') }}" class="nav-link cart-link">
                                    <i class='bx bx-heart'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a href="#"
                                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link"
                                    data-bs-toggle="dropdown">
                                    <span class="alert-count">{{ Cart::getTotalQuantity()}}</span>
                                    <i class='bx bx-shopping-bag'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('site.cart.list') }}">
                                        <div class="cart-header">
                                            <p class="cart-header-title mb-0">{{ Cart::getTotalQuantity() == 1 ?
                                                Cart::getTotalQuantity() ." ". __('content.item') :
                                                Cart::getTotalQuantity() ." ". __('content.items') }}</p>
                                            <p class="cart-header-clear ms-auto mb-0">{{ __('content.view cart') }}</p>
                                        </div>
                                    </a>
                                    {{-- @if (isset(\Cart::getContent())) --}}
                                    <div class="cart-list">
                                        @foreach (\Cart::getContent() as $item)
                                        @include('site.includes.cards.cart-header')
                                        @endforeach
                                    </div>

                                    {{-- @endif --}}
                                    <a href="javascript:;">
                                        <div class="text-center cart-footer d-flex align-items-center">
                                            <h5 class="mb-0">TOTAL</h5>
                                            {{-- <h5 class="mb-0 ms-auto">{{ currency(Cart::getTotal()) }}</h5> --}}
                                            <h5 class="mb-0 ms-auto">{{ currency(getNumbers()['subTotal']) }}</h5>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top"> <a href="{{ route('site.address.index') }}"
                                            class="btn btn-light btn-ecomm">{{ __('content.checkout') }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>

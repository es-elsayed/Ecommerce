<div class="header-content pb-3 pb-md-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-md-auto">
                <div class="d-flex align-items-center">
                    <div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i
                            class='bx bx-menu'></i>
                    </div>
                    <div class="logo d-none d-lg-flex">
                        <a href="index.html">
                            <img src="{{ asset('assets/site/images/logo-icon.png') }}" class="logo-icon" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md order-4 order-md-2">
                <div class="input-group flex-nowrap px-xl-4">
                    <input type="text" class="form-control w-100" placeholder="{{ __('content.header.center.search for products') }}">
                    <select class="form-select flex-shrink-0" aria-label="Default select example"
                        style="width: 10.5rem;">
                        <option selected>{{ __('content.header.center.categories') }}</option>
                        @foreach (\App\Models\Category::activeParent()->get() as $main_category)
                        <option value="{{ $main_category->id }}">{{ $main_category->name_en }}</option>
                        @endforeach
                    </select> <span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
                </div>
            </div>
            <div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
                <div class="fs-1 text-white"><i class='bx bx-headphone'></i>
                </div>
                <div class="ms-2">
                    <p class="mb-0 font-13">{{ __('content.header.center.call us') }}</p>
                    <h5 class="mb-0">+011 5827918</h5>
                </div>
            </div>
            <div class="col col-md-auto order-2 order-md-4">
                <div class="top-cart-icons">
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i
                                        class='bx bx-user'></i></a>
                            </li>
                            <li class="nav-item"><a href="javascript:;" class="nav-link cart-link"><i
                                        class='bx bx-heart'></i></a>
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
                                            <p class="cart-header-title mb-0">{{ Cart::getTotalQuantity()}} ITEMS</p>
                                            <p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
                                        </div>
                                    </a>
                                    {{-- @if (isset(\Cart::getContent())) --}}
                                    <div class="cart-list">
                                        @foreach (\Cart::getContent() as $item)
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <h6 class="cart-product-title">{{ $item->name }}</h6>
                                                    <p class="cart-product-price">{{ $item->quantity }} x {{
                                                        currency($item->price) }}</p>
                                                </div>
                                                <div class="position-relative">
                                                    {{-- <div> --}}
                                                        <form class="position-absolute" action="{{ route('site.cart.remove') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                                            <button type="submit"  class="cart-product-cancel position-absolute"><i class='bx bx-x'></i></button>
                                                        </form>
                                                    {{-- </div> --}}
                                                    <div class="cart-product">
                                                        <img src="{{ asset($item->attributes->image) }}"
                                                            class="" alt="product image">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>

                                    {{-- @endif --}}
                                    <a href="javascript:;">
                                        <div class="text-center cart-footer d-flex align-items-center">
                                            <h5 class="mb-0">TOTAL</h5>
                                            <h5 class="mb-0 ms-auto">{{ currency(Cart::getTotal()) }}</h5>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top"> <a href="javascript:;"
                                            class="btn btn-light btn-ecomm">CHECKOUT</a>
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

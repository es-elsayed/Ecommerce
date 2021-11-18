<div class="primary-menu border-top">
    <div class="container">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
            <div class="offcanvas-header">
                <button class="btn-close float-end"></button>
                <h5 class="py-2 text-white">Navigation</h5>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="{{ route('site.home') }}">Home </a>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu dropdown-large-menu">
                        <div class="row">
                            @foreach (\App\Models\Category::activeParent() as $main_category )
                            <div class="col-md-4">
                                <h6 class="large-menu-title">{{ $main_category->name_en }}</h6>
                                <ul class="">
                                    @foreach(\App\Models\Category::getChildrenByParentId($main_category->id)
                                    as $sub_cat)
                                    <li><a href="#">{{ $sub_cat->name_en }}</a>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-large.// -->
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('site.shop') }}">Shop </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="blog.html">Blog </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="about-us.html">About Us </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="contact-us.html">Contact Us </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="shop-categories.html">Our Store</a>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        data-bs-toggle="dropdown">My Account <i class='bx bx-chevron-down'></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-dashboard.html">Dashboard</a>
                        </li>
                        <li><a class="dropdown-item" href="account-downloads.html">Downloads</a>
                        </li>
                        <li><a class="dropdown-item" href="account-orders.html">Orders</a>
                        </li>
                        <li><a class="dropdown-item" href="account-payment-methods.html">Payment Methods</a>
                        </li>
                        <li><a class="dropdown-item" href="account-user-details.html">User Details</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="top-menu border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand">
            <div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex"> {{
                __('content.header.top.welcome to our store!') }} </div>
            <ul class="navbar-nav ms-auto d-none d-lg-flex">
                <li class="nav-item"> <a class="nav-link" href="order-tracking.html"> {{ __('content.header.top.track order') }} </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="about-us.html"> {{ __('content.header.about') }}
                    </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="shop-categories.html"> {{ __('content.header.top.our stores') }} </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="blog.html"> {{ __('content.header.blog') }} </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="contact-us.html"> {{ __('content.header.contact') }}
                    </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="javascript:;"> {{ __('content.header.top.help') }} </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                        <div class="lang d-flex gap-1">
                            <div><span> {{ __('content.header.top.lang') }} </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-end">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            {{-- <li> --}}
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item d-flex allign-items-center">
                                    @if ($localeCode == 'en')
                                    <i class="flag-icon flag-icon-um me-2"></i>
                                    @else
                                    <i class="flag-icon flag-icon-ae me-2"></i>
                                    @endif
                                    {{ $properties['native'] }}
                                </a>
                            {{-- </li> --}}
                        @endforeach
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>

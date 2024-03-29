@props(['maincategories'])

<div class="primary-menu border-top">
    <div class="container">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg justify-content-center">
            <div class="offcanvas-header">
                <button class="btn-close float-end"></button>
                <h5 class="py-2 text-white">Navigation</h5>
            </div>
            <ul class="navbar-nav">
                <x-site.includes.li-nav-link href="{{ route('site.shop.index') }}">{{ __('content.shop') }}
                </x-site.includes.li-nav-link>
                @foreach ($maincategories as $main_category)
                @php
                $is_parent = !$main_category->activeChilds->isEmpty();
                @endphp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret"
                        href="{{ route('site.shop.show', $main_category->slug) }}"
                        @if($is_parent)data-bs-toggle="dropdown" @endif> {{ $main_category->name }}
                        @if ($is_parent)
                        <i class='bx bx-chevron-down'></i>
                        @endif
                    </a>
                    @if ($is_parent)
                    <div class="dropdown-menu dropdown-large-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="">
                                    @foreach ($main_category->activeChilds as $sub_cat)
                                    <li>
                                        <a href="{{ route('site.shop.show', $sub_cat->slug) }}">
                                            {{ $sub_cat->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-large.// -->
                    @endif
                    @endforeach
                </li>

                {{-- <x-site.includes.li-nav-link>{{ __('content.blog') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.about') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link href="{{ route('site.contact.index') }}">{{ __('content.contact') }}
                </x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.our stores') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link href="{{ route('site.profile.index') }}">
                    {{ __('content.my account') }}
                </x-site.includes.li-nav-link> --}}
            </ul>
        </nav>
    </div>
</div>

<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
            <div class="lang d-flex gap-1">
                <div>
                    <span>

                        <i class="flag-icon flag-icon-{{ app()->getLocale()=='ar'? 'eg':'gb' }} me-2"></i>
                    </span>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg-end p-0">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a rel="alternate" hreflang="{{ $localeCode }}"
                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="dropdown-item d-flex allign-items-center">
                @if ($localeCode == 'en')
                <i class="flag-icon flag-icon-gb me-2"></i>
                @else
                <i class="flag-icon flag-icon-eg me-2"></i>
                @endif
                <span>{{ $properties['native'] }}</span>
            </a>
            @endforeach
        </div>
    </li>
</ul>

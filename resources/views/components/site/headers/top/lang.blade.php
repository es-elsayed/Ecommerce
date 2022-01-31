<ul class="navbar-nav mx-2">
    <li class="nav-item dropdown">
        <span>
            <a href="{{ LaravelLocalization::getLocalizedURL(app()->isLocale('en') ? 'ar':'en', null, [], true) }}">
                <i class="flag-icon flag-icon-{{ app()->isLocale('en')? 'eg':'gb' }} me-2"></i>
            </a>
        </span>
    </li>
</ul>

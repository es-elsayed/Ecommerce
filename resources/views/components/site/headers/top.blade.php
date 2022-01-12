<div class="top-menu border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand">
            <x-site.headers.top.social />

            <ul class="navbar-nav ms-auto d-none d-lg-flex">
                <x-site.includes.li-nav-link> {{ __('content.track order') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.about') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.our stores') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.blog') }}</x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link href="{{ route('site.contact.index') }}">{{ __('content.contact') }}
                </x-site.includes.li-nav-link>
                <x-site.includes.li-nav-link>{{ __('content.help') }}</x-site.includes.li-nav-link>
            </ul>
            <x-site.headers.top.lang />
        </nav>
    </div>
</div>

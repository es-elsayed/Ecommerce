<ul class="navbar-nav social-link ms-lg-2 ms-auto">
    @if (isset($siteInfo->whatsapp))
    <x-site.includes.li-nav-link href="https://wa.me/{{ $siteInfo->whatsapp }}"><i class='lni lni-whatsapp'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->facebook))
    <x-site.includes.li-nav-link href="{{ $siteInfo->facebook }}"><i class='bx bxl-facebook'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->twitter))
    <x-site.includes.li-nav-link href="{{ $siteInfo->twitter }}"><i class='bx bxl-twitter'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->linkedin))
    <x-site.includes.li-nav-link href="{{ $siteInfo->linkedin }}"><i class='bx bxl-linkedin'></i>
    </x-site.includes.li-nav-link>
    @endif
</ul>

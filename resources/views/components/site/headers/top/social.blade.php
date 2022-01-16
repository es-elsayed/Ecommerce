<ul class="navbar-nav social-link ms-lg-2 ms-auto">
    @if ($siteInfo->whatsapp ?? 0)
    <x-site.includes.li-nav-link href="https://wa.me/{{ $siteInfo->whatsapp }}"><i class='lni lni-whatsapp'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if ($siteInfo->facebook ?? 0)
    <x-site.includes.li-nav-link href="{{ $siteInfo->facebook }}"><i class='bx bxl-facebook'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if ($siteInfo->twitter ?? 0)
    <x-site.includes.li-nav-link href="{{ $siteInfo->twitter }}"><i class='bx bxl-twitter'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if ($siteInfo->linkedin ?? 0)
    <x-site.includes.li-nav-link href="{{ $siteInfo->linkedin }}"><i class='bx bxl-linkedin'></i>
    </x-site.includes.li-nav-link>
    @endif
</ul>

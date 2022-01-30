<ul class="navbar-nav social-link ms-lg-2 ms-auto">
    @if (isset($siteInfo->whatsapp))
    <x-site.includes.li-nav-link href="https://wa.me/{{ $siteInfo->whatsapp }}" target="_blank" rel="noopener"><i class='lni lni-whatsapp'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->facebook))
    <x-site.includes.li-nav-link href="{{ $siteInfo->facebook }}" target="_blank" rel="noopener"><i class='bx bxl-facebook'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->twitter))
    <x-site.includes.li-nav-link href="{{ $siteInfo->twitter }}" target="_blank" rel="noopener"><i class='bx bxl-twitter'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->linkedin))
    <x-site.includes.li-nav-link href="{{ $siteInfo->linkedin }}" target="_blank" rel="noopener"><i class='bx bxl-linkedin'></i>
    </x-site.includes.li-nav-link>
    @endif
    @if (isset($siteInfo->youtube))
    <x-site.includes.li-nav-link href="{{ $siteInfo->youtube }}" target="_blank" rel="noopener"><i class='bx bxl-youtube'></i>
    </x-site.includes.li-nav-link>
    @endif
</ul>

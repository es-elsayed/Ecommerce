<ul class="navbar-nav social-link ms-lg-2 ms-auto">
    @if (getInfo('whatsapp'))
    <x-site.includes.li-nav-link href="https://wa.me/{{ getInfo('whatsapp') }}"><i class='lni lni-whatsapp'></i></x-site.includes.li-nav-link>
    @endif
    @if (getInfo('facebook'))
    <x-site.includes.li-nav-link href="{{ getInfo('facebook') }}"><i class='bx bxl-facebook'></i></x-site.includes.li-nav-link>
    @endif
    @if (getInfo('twitter'))
    <x-site.includes.li-nav-link href="{{ getInfo('twitter') }}"><i class='bx bxl-twitter'></i></x-site.includes.li-nav-link>
    @endif
    @if (getInfo('linkedin'))
    <x-site.includes.li-nav-link href="{{ getInfo('linkedin') }}"><i class='bx bxl-linkedin'></i></x-site.includes.li-nav-link>
    @endif
</ul>

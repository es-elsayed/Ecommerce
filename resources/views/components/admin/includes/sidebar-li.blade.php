@props(['title','icon','route'])
{{-- @dd($title) --}}
<li>
    <a href="javascript:;" class="has-arrow">
        <div class="parent-icon">
            {{ $slot }}
        </div>
        <div class="menu-title">{{ ucwords(plural($title)) }}</div>
    </a>
    <ul>
        <li>
            <a href="{{ route("admin.".$route.".index") }}">
                <i class="bx bx-right-arrow-alt"></i>{{ "All  ". plural($title) }}
            </a>
        </li>
        <li>
            <a href="{{ route("admin.".$route.".create") }}">
                <i class="bx bx-right-arrow-alt"></i>{{ "Add $title" }}
            </a>
        </li>
        {{-- <x-admin.includes.a-right-arrow :title="All" href="{{ route("admin.$title.index") }}"/> --}}
        {{-- <x-admin.includes.a-right-arrow :title="'Add'" href="{{ route("admin.$title.create") }}"/> --}}
    </ul>
</li>

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashtrans</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <x-admin.includes.sidebar-li :title="'maincategory'" ><i class="bx bx-home-circle"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li :title="'subcategory'" ><i class="bx bx-home-circle"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li :title="'product'" ><i class="lni lni-grow"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li :title="'slider'" ><i class="lni lni-image"></i></x-admin.includes.sidebar-li>
        <li>
            <a href="{{ route('admin.orders.index') }}">
                <div class="parent-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>
    </ul>
    {{-- {{ Illuminate\Support\Str::plural('child', 5) }} --}}
    <!--end navigation-->
</div>

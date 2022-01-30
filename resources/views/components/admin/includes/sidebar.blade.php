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
        <x-admin.includes.sidebar-li title="brands" route="brands" ><i class="lni lni-bold"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li title="main category" route="maincategories" ><i class="bx bx-home-circle"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li title="sub category" route="subcategories" ><i class="bx bx-home-circle"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li title="product" route="products" ><i class="lni lni-grow"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li title="Tag" route="tags" ><i class="lni lni-tag"></i></x-admin.includes.sidebar-li>
        <x-admin.includes.sidebar-li title="slider" route="sliders" ><i class="lni lni-image"></i></x-admin.includes.sidebar-li>
        <li>
            <a href="{{ route('admin.orders.index') }}">
                <div class="parent-icon">
                    <i class="lni lni-delivery"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.site-info.index') }}">
                <div class="parent-icon">
                    <i class="lni lni-information"></i>
                </div>
                <div class="menu-title">Site Info</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.messages.index') }}">
                <div class="parent-icon">
                    <i class="bx bx-message"></i>
                </div>
                <div class="menu-title">Messages</div>
            </a>
        </li>
    </ul>
    {{-- {{ Illuminate\Support\Str::plural('child', 5) }} --}}
    <!--end navigation-->
</div>

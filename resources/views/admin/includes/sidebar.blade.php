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
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Main Categories</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.maincategory') }}"><i class="bx bx-right-arrow-alt"></i>All Main Categories</a>
                </li>
                <li> <a href="{{ route('admin.maincategory.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Main Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Sub Categories</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>All Sub Categories</a>
                </li>
                <li> <a href="{{ route('admin.subcategory.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.product') }}"><i class="bx bx-right-arrow-alt"></i>All Products</a>
                </li>
                <li> <a href="{{ route('admin.product.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>

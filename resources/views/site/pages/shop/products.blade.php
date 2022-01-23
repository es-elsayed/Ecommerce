<x-site.layout>
    <x-slot name="title">
        {{ __('content.shop') }}
    </x-slot>

    <div class="page-content">
        <!--start breadcrumb-->
        <x-site.headers.breadcrumb title="{{ __('content.shop') }}" active="{{ $category->name ?? null }}">
            <li class="breadcrumb-item">
                <a href="{{ route('site.home.index') }}">
                    <i class="bx bx-home-alt"></i>
                    {{ __('content.home') }}
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('site.shop.index') }}">
                    <i class="bx bx-shopping-bag"></i>
                    {{ __('content.shop') }}
                </a>
            </li>
        </x-site.headers.breadcrumb>
        <!--end breadcrumb-->
        <!--start shop area-->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    @if (isset($sub_categories))
                    <x-site.cards.product-filter :category="$category" :categories="$sub_categories" />
                    @endif
                    <div class="col-12 col-xl-{{ isset($sub_categories)? '9' : '12' }}">
                        <div class="product-wrapper">
                            <x-site.cards.product-grid :products="$products" />
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end shop area-->
    </div>

    @if(isset($sub_categories))
    <script>
        // ----------------------------------------------------------
        // -------------------- sorting product  --------------------
        // ----------------------------------------------------------
        const sorting_buttons = document.querySelectorAll('.sort');
        sorting_buttons.forEach(button => {
            button.addEventListener('click',(e)=>{
                if(e.target.dataset.sort == 'low-to-high') {
                    window.location.href = "{{ route('site.shop.show',[$category->slug,'sort'=>'low-to-high']) }}";
                }
                else if(e.target.dataset.sort == 'high-to-low'){
                    window.location.href = "{{ route('site.shop.show',[$category->slug,'sort'=>'high-to-low']) }}";
                }
                else{
                    window.location.href = "{{ route('site.shop.show',$category->slug) }}";
                }
            })
        });
    </script>
    @endif
</x-site.layout>

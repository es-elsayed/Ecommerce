@props(['products'])

<div class="product-grid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
        @forelse ($products as $product )
        @include('site.includes.cards.product')
        @empty
        <div>No Products</div>
        @endforelse
    </div>
    <!--end row-->
</div>
<hr>

{{-- =================== Larvel Pagination =================== --}}
{{  $products->links() }}

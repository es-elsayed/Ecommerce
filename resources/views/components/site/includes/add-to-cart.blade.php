@props(['product','quantity'=>false])
<form action="{{ route('site.cart.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{ $product->id }}" name="id">
    <input type="hidden" value="{{ $product->name }}" name="name">
    <input type="hidden" value="{{ $product->price }}" name="price">
    <input type="hidden" value="{{ $product->main_image }}" name="image">
    @if ($product->quantity>0)
    <div class="row row-cols-auto align-items-center mt-3">
        <div class="col">
            <input type="{{ $quantity? 'number' : 'hidden' }}" class="form-control rounded-0 qty mb-3" value="1"
                name="quantity">
                {{-- name="quantity" min="1" max="5"> --}}
        </div>
    </div>
    <button class="btn btn-light btn-ecomm w-100">
        <i class="bx bxs-cart-add"></i>
        {{ __('content.add to cart') }}
    </button>
    @endif
</form>

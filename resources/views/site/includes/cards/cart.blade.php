@php
$cart_prod = \App\Models\Product::getProductById($item->id)
@endphp
<div class="row align-items-center g-3">
    <div class="col-12 col-lg-6">
        <div class="d-lg-flex align-items-center gap-2">
            <div class="cart-img text-center text-lg-start">
                {{-- @dd($item) --}}
                <img src="{{ asset($cart_prod->main_image) }}" width="130" alt="">
            </div>
            <div class="cart-detail text-center text-lg-start">
                <h6 class="mb-2">{{ $cart_prod->name }}</h6>
                <p class="mb-0">Size: <span>Regular</span>
                </p>
                <p class="mb-2">Color: <span>White &amp; Blue</span>
                </p>
                @if ($cart_prod->sale)
                <span class="text-white fs-5">{{ currency($cart_prod->sale_price) }}</span>
                <span class="me-1 text-decoration-line-through">{{ currency($cart_prod->price) }}</span>
                @else
                <span class="text-white fs-5">{{ currency($cart_prod->price) }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <form class="cart-action text-center" data-parent id="parent-{{ $loop->iteration }}" action="{{ route('site.cart.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" data-child="#parent-{{ $loop->iteration }}" value="{{ $item->id}}">
            <input type="number" class="form-control rounded-0 qty" name="quantity" value="{{ $item->quantity }}" min="1">
            {{-- <button type="submit" class="btn btn-white btn-ecomm"><i class="bx bx-x-circle"></i> Clear
                Cart</button> --}}
        </form>
        {{-- <div>
        </div> --}}
    </div>
    <div class="col-12 col-lg-3">
        <div class="text-center">
            <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;"
                    class="btn btn-light rounded-0 btn-ecomm"><i class="bx bx-x-circle"></i> {{ __('content.remove') }}</a>
                <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class="bx bx-heart me-0"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="my-4 border-top"></div>
@section('extra-js')
<script>
    const qtyInputs = document.querySelectorAll('.qty');
    qtyInputs.forEach((qtyInput)=>{
        qtyInput.addEventListener('change', (e)=>{
            console.log(e.target.parentElement.submit());
        })
    })
</script>
@endsection

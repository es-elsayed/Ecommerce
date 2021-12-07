<form method="POST" action="{{ route('site.checkout.details') }}" class="row g-3">
    @csrf
    <div class="col-md-12">
        <h6 class="mb-0 h5">Billing Address</h6>
        <div class="my-3 border-bottom"></div>
        @foreach ($addresses as $address)
        <div class="form-check">
            <input class="form-check-input" name="billing_address" type="radio" id="address_{{ $loop->iteration }}">
            <label class="form-check-label" for="address_{{ $loop->iteration }}">{{ $address->region->name }}, {{ $address->city->name }}, {{ $address->district->name }}</label>
        </div>
        @endforeach
    </div>
    <div class="col-md-6">
        <div class="d-grid">
            <a href="{{ route('site.cart.list') }}" class="btn btn-light btn-ecomm">
                <i class="bx bx-chevron-left"></i>Back to Cart
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-grid">
            <button type="submit" class="btn btn-white btn-ecomm">
                Proceed to Checkout<i class="bx bx-chevron-right"></i>
            </button>
        </div>
    </div>
</form>

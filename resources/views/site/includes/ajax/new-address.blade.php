<form method="POST" action="{{ route('site.checkout.details') }}" class="row g-3">
    @csrf
    <h2 class="h5 mb-0">Details</h2>
    <div class="my-3 border-bottom"></div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.first name') }}</label>
        <input type="text" class="form-control rounded-0" value="{{ auth()->user()->f_name }}" disabled>
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.last name') }}</label>
        <input type="text" class="form-control rounded-0" value="{{ auth()->user()->l_name }}" disabled>
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.e-mail') }}</label>
        <input type="email" class="form-control rounded-0" value="{{ auth()->user()->email }}" disabled>
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.phone number') }}</label>
        <input type="tel" class="form-control rounded-0" value="{{ auth()->user()->phone }}" disabled>
    </div>
    <h2 class="h5 mb-0">Address</h2>
    <div class="my-3 border-bottom"></div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.region') }}</label>
        <input autocomplete="off" list="regions" name="region" id="region" value="{{ old('region') }}" class="form-control rounded-0" placeholder="{{ __('content.enter region') }}">
        @error('region')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <datalist id="regions">
        </datalist>
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.city') }}</label>
        <input autocomplete="off" list="citys" name="city" id="city" value="{{ old('city') }}" class="form-control rounded-0" placeholder="{{ __('content.enter city') }}">
        @error('city')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <datalist id="citys">
        </datalist>
    </div>
    <div class="col-md-6">
        <label class="form-label">{{ __('content.district') }}</label>
        <input autocomplete="off" list="districts" name="district" id="district" value="{{ old('district') }}" class="form-control rounded-0" placeholder="{{ __('content.enter district') }}">
        @error('district')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <datalist id="districts">
        </datalist>
    </div>
    <div class="col-md-6">
        <label class="form-label">Zip/Postal Code</label>
        <input type="text" name="zip" class="form-control rounded-0" value="{{ old('zip') }}">
        @error('zip')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-12">
        <label class="form-label">{{ __('content.address') }}</label>
        <input type="text" class="form-control rounded-0" name="address" value="{{ old('address') }}">
        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="save_address" name="save_address" checked="">
        <label class="form-check-label" for="save_address">Save new Address</label>
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

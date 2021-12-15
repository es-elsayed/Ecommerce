<div class="form-check">
    <input class="form-check-input" name="address_choise" value="new" type="radio" id="new_address">
    <label class="form-check-label" for="new_address">Add new Address</label>
</div>
<div class="col-md-6 hide-address">
    <label class="form-label">{{ __('content.region') }}</label>
    <input autocomplete="off" list="regions" name="region" id="region" value="{{ old('region') }}" class="form-control rounded-0" placeholder="{{ __('content.enter region') }}">
    @error('region')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <datalist id="regions">
    </datalist>
</div>
<div class="col-md-6 hide-address">
    <label class="form-label">{{ __('content.city') }}</label>
    <input autocomplete="off" list="citys" name="city" id="city" value="{{ old('city') }}" class="form-control rounded-0" placeholder="{{ __('content.enter city') }}">
    @error('city')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <datalist id="citys">
    </datalist>
</div>
<div class="col-md-6 hide-address">
    <label class="form-label">{{ __('content.address') }}</label>
    <input type="text" class="form-control rounded-0" id="address" name="address" value="{{ old('address') }}">
    @error('address')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6 hide-address">
    <label class="form-label">Zip/Postal Code</label>
    <input type="text" name="zip" class="form-control rounded-0" value="{{ old('zip') }}">
    @error('zip')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@props(['name','type'])
<div class="col-xl mb-3">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <input {{ $attributes->merge(['id'=>$name,'name'=>$name,'class'=>"form-control"]) }}>
    {{-- @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror --}}
    @error($name) <div class="text-danger">{{ $message }}</div> @enderror
</div>

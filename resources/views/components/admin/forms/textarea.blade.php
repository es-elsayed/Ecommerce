@props(['name','value'=>''])
<div class="col-xl mb-3">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <textarea {{ $attributes->merge(['class'=>"form-control",'id'=>$name,'name'=>$name]) }}>{{ $value }}</textarea>
    @error($name) <div class="text-danger">{{ $message }}</div> @enderror

</div>
{{-- @error('{{ $name }}') is-invalid @enderror --}}

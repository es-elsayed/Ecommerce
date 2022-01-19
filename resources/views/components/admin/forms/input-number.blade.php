@props(['name'])
<div class="col-xl mb-3">
    <label for="{{ $name }}" class="form-label">{{ $slot }}</label>
    <div class="input-group input-spinner">
        <input {{ $attributes->merge(['type'=>'number','id'=>$name,'name'=>$name,'class'=>"form-control",'step'=>".05",
        'min'=>"0", 'maxlength'=>"9"]) }}
        >
    </div>
    @error($name) <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="row">
    <x-admin.forms.select name="brand_id">
        <option selected="">Select Brand</option>
        @foreach ($brands as $brand )
        <option value="{{ $brand->id }}" @if( $brand->id == $brandId)
            selected
            @endif
            >{{ $brand->name_en }}</option>
        @endforeach
    </x-admin.forms.select>
</div>

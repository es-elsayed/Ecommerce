{{-- Decide route is store or update --}}
@php
$route =route("admin.products.store");
$method = false;
$title = "Add Product";
if (Route::currentRouteName() == "admin.products.edit") {
$route = route("admin.products.update",$product->slug);
$method = true;
$title = "Edit Product";
}
@endphp
{{-- End --}}
<x-admin.layout :title="$title">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>{{ $title }}</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">{{ $title }}</h5>
            <hr />
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg">
                        <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($method ?? 0)
                            @method('put')
                            @endif
                            @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="name_en"
                                        placeholder="Product Name in English"
                                        value="{{ $product->name_en ?? old('name_en') }}">Product Name (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="name_ar"
                                        placeholder="Product Name in Arabic"
                                        value="{{ $product->name_ar ?? old('name_ar') }}">Product Name (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <div class="row">
                                    <x-admin.forms.select name="brand_id" >
                                        <option selected="">Select Brand</option>
                                        @foreach ($brands as $brand )
                                        <option value="{{ $brand->id }}" @if($brand->id === $product->brand_id )
                                            selected>{{ $brand->name_en }}</option>
                                        @endforeach
                                    </x-admin.forms.select>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="details_en" placeholder="Enter Details  in English"
                                        value="{{ $product->details ?? old('details_en') }}"> Details (en)
                                    </x-admin.forms.textarea>
                                    <x-admin.forms.textarea name="details_ar" placeholder="Enter Details  in Arabic"
                                        value="{{ $product->details ?? old('details_ar') }}"> Details (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_en"
                                        placeholder="Enter Description  in English"
                                        value="{{ $product->description ?? old('description_en') }}"> Description (en)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_ar"
                                        placeholder="Enter Description  in Arabic"
                                        value="{{ $product->description ?? old('description_ar') }}"> Description (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.input-number name="price" required
                                        value="{{ $product->price ?? old('price') }}">Price</x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="sale_price" required
                                        value="{{ $product->sale_price ?? old('sale_price') }}">Sale Price
                                    </x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="qty" required
                                        value="{{ $product->qty ?? old('qty') }}" step='1'>Quantity
                                    </x-admin.forms.input-number>
                                    {{-- <div class="col-xl mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group input-spinner">
                                            <input type="number" step=".05" class="form-control" min="0" maxlength="9"
                                                required value="{{ old('price') }}" name="price">
                                        </div>
                                        @error('price')
                                        <div class="invalid-feedback">{{ $message
                                            }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl mb-3">
                                        <label for="sale_price" class="form-label">Sale Price</label>
                                        <div class="input-group input-spinner">
                                            <input type="number" step=".05" class="form-control" min="0" maxlength="9"
                                                required value="{{ old('sale_price') }}" name="sale_price">
                                        </div>
                                        @error('sale_price')
                                        <div class="invalid-feedback">{{ $message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl mb-3">
                                        <label for="qty" class="form-label">Quantity</label>
                                        <div class="input-group input-spinner">
                                            <input type="number" step="1" class="form-control" min="0" maxlength="9"
                                                required value="{{ old('qty') }}" name="qty">
                                        </div>
                                        @error('qty')
                                        <div class="invalid-feedback">{{ $message}}</div>
                                        @enderror
                                    </div> --}}
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" checked=""
                                        name="status">
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <div class="mb-3">
                                    <hr /><label for="status" class="form-check-label d-block mb-3">Category</label>
                                    @foreach ($parent_categories as $parent_category)
                                    <ul style="list-style-type: none">
                                        <li><input class="form-check-input" type="checkbox"
                                                id="cat_[{{ $parent_category->id }}]" name="categories[]"
                                                value="{{ $parent_category->id }}">
                                            <label class="form-check-label" for="cat_[{{ $parent_category->id }}]">{{
                                                $parent_category->name_en }}</label>
                                            <ul>
                                                @foreach($parent_category->childs as $sub_cat)
                                                <li class="d-inline">
                                                    <input class="form-check-input sub-cat" type="checkbox"
                                                        id="cat_[{{ $sub_cat->id }}]" name="categories[]"
                                                        value="{{ $sub_cat->id }}">
                                                    <label class="form-check-label" for="cat_[{{ $sub_cat->id }}]">{{
                                                        $sub_cat->name }}</label>

                                                </li>
                                                @endforeach
                                            </ul>

                                        </li>
                                    </ul>
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="cat_[{{ $category->id }}]"
                                            name="categories[]" value="{{ $category->id }}">
                                        <label class="form-check-label" for="cat_[{{ $category->id }}]">{{
                                            $category->name_en }}</label>
                                    </div> --}}
                                    @endforeach
                                    @if ($errors->has('categories'))
                                    @foreach ($errors->get('categories') as $message)
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @endforeach

                                    @endif
                                    @if ($errors->has('categories.*'))
                                    @foreach ($errors->get('categories.*') as $messages)
                                    @foreach($messages as $message)
                                    <div class="invalid-feedback d-block">Image no: {{ $loop->parent->iteration }} {{
                                        $message }}</div>
                                    @endforeach
                                    @endforeach
                                    @endif

                                </div>
                                <div class="mb-3">
                                    <label for="main_image" class="form-label">Select Image</label>
                                    <input id="main_image" type="file" name="main_image" class="form-control">
                                    @if ($errors->has('main_image'))
                                    @foreach ($errors->get('main_image') as $message)
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="images" class="form-label">Select Image</label>
                                    <input id="images" type="file" name="images[]" class="form-control" multiple>
                                    @if ($errors->has('images.*'))
                                    @foreach ($errors->get('images.*') as $messages)
                                    @foreach($messages as $message)
                                    <div class="invalid-feedback d-block">Image no: {{ $loop->parent->iteration }} {{
                                        $message }}</div>
                                    @endforeach
                                    @endforeach
                                    @endif
                                    <div class="col-12 mt-5">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-light">Add</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <x-admin.scripts.categoryproduct-check />
</x-admin.layout>

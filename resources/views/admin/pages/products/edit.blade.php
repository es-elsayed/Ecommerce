@php
$title = "Edit Product";
@endphp
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
                        <form action="{{ route('admin.products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
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
                                <x-admin.brands-dropdown brand-id="{{ $product->brand_id ?? null }}" />
                                <div class="row">
                                    {{-- @dd($product) --}}
                                    <x-admin.forms.textarea name="details_en" placeholder="Enter Details  in English"
                                        value="{{ $product->details_en ?? old('details_en') }}"> Details (en)
                                    </x-admin.forms.textarea>
                                    <x-admin.forms.textarea name="details_ar" placeholder="Enter Details  in Arabic"
                                        value="{{ $product->details_ar ?? old('details_ar') }}"> Details (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_en"
                                        placeholder="Enter Description  in English"
                                        value="{{ $product->description_en ?? old('description_en') }}"> Description
                                        (en)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_ar"
                                        placeholder="Enter Description  in Arabic"
                                        value="{{ $product->description_ar ?? old('description_ar') }}"> Description
                                        (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.input-number name="price" required
                                        value="{{ $product->price ?? old('price') }}">Price</x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="sale_price" required
                                        value="{{ $product->sale_price ?? old('sale_price') }}">Sale Price
                                    </x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="qty" required
                                        value="{{ $product->quantity ?? old('qty') }}" step='1'>Quantity
                                    </x-admin.forms.input-number>
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" name="status"
                                        @if(isset($product) && $product->status == 0)
                                    @else
                                    checked=''
                                    @endif
                                    >
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <x-admin.tags-checkbox />
                                <div class="mb-3">
                                    <label for="status"
                                        class="form-check-label d-block mb-3  border-top pt-3">Category</label>
                                    @foreach ($parent_categories as $parent_category)
                                    <ul style="list-style-type: none">
                                        <li><input class="form-check-input" type="checkbox"
                                                id="cat_[{{ $parent_category->id }}]" name="categories[]"
                                                value="{{ $parent_category->id }}" @if ($product ?? null)
                                                @foreach($category_shared as $shared)
                                                @if($shared===$parent_category->id) checked @endif
                                            @endforeach
                                            @endif>
                                            <label class="form-check-label" for="cat_[{{ $parent_category->id }}]">{{
                                                $parent_category->name_en }}</label>
                                            <ul>
                                                @foreach($parent_category->childs as $sub_cat)
                                                <li class="d-inline-block me-3">
                                                    <input class="form-check-input sub-cat" type="checkbox"
                                                        id="cat_[{{ $sub_cat->id }}]" name="categories[]"
                                                        value="{{ $sub_cat->id }}" @if ($product ?? null)
                                                        @foreach($category_shared as $shared)
                                                        @if($shared===$sub_cat->id) checked @endif
                                                    @endforeach
                                                    @endif
                                                    >
                                                    <label class="form-check-label" for="cat_[{{ $sub_cat->id }}]">
                                                        {{ $sub_cat->name }}</label>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
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
                                <hr>
                                <div class="mb-3">
                                    <label for="main_image" class="form-label">Main Image</label>
                                    <input id="main_image" type="file" name="main_image" class="form-control">
                                    @if ($errors->has('main_image'))
                                    @foreach ($errors->get('main_image') as $message)
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @endforeach
                                    @endif
                                </div>
                                @if ($product ?? 0)
                                <div class="mb-3">
                                    <div class="img-style">
                                        <img src="{{asset($product->main_image) }}" class="img-style"
                                            data-real-src="{{ $product->main_image }}" alt="product image">
                                    </div>
                                </div>
                                @endif
                                <hr>
                                <div class="mb-3">
                                    <label for="images" class="form-label">Sub-Images</label>
                                    <input id="images" type="file" name="images[]" class="form-control" multiple>
                                    @if ($errors->has('images.*'))
                                    @foreach ($errors->get('images.*') as $messages)
                                    @foreach($messages as $message)
                                    <div class="invalid-feedback d-block">Image no: {{ $loop->parent->iteration }} {{
                                        $message }}</div>
                                    @endforeach
                                    @endforeach
                                    @endif
                                </div>
                                @if ($product ?? 0)
                                <div class="mb-3">
                                    @foreach ($images as $image )
                                    <div class="img-style">
                                        <img src="{{asset($image->image) }}" class="img-style"
                                            data-real-src="{{ $image->image }}" alt="product image">
                                        <button type="button" class="btn btn-danger">x</button>
                                    </div>
                                    @endforeach
                                    <input type="hidden" id="deleted_images" name="deleted_images" value="">
                                </div>
                                @endif
                                <div class="col-12 mt-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">
                                            @if ($product ?? 0)
                                            Update
                                            @else
                                            Add
                                            @endif
                                        </button>
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
    <script>
        const buttons = document.querySelectorAll('.btn-danger');
        const deleted = document.querySelector('#deleted_images');
        const deleted_array = [];
        buttons.forEach((button)=>{
            button.addEventListener('click', (e)=>{
                deleted_array.push(e.target.previousElementSibling.dataset.realSrc);
                deleted.value=deleted_array
        console.log(deleted.value);
                // console.log(deleted.value);
                e.target.parentElement.remove();
            })
        })
    </script>
</x-admin.layout>

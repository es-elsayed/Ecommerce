@php
$title = "Add Product";
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
                        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="name_en"
                                        placeholder="Product Name in English" value="{{ old('name_en') }}">Product Name
                                        (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="name_ar"
                                        placeholder="Product Name in Arabic" value="{{ old('name_ar') }}">Product Name
                                        (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <x-admin.brands-dropdown />

                                <div class="row">
                                    <x-admin.forms.textarea name="details_en" placeholder="Enter Details  in English"
                                        value="{{ old('details_en') }}"> Details (en)
                                    </x-admin.forms.textarea>
                                    <x-admin.forms.textarea name="details_ar" placeholder="Enter Details  in Arabic"
                                        value="{{ old('details_ar') }}"> Details (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_en"
                                        placeholder="Enter Description  in English" value="{{ old('description_en') }}">
                                        Description
                                        (en)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_ar"
                                        placeholder="Enter Description  in Arabic" value="{{  old('description_ar') }}">
                                        Description
                                        (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.input-number name="price" required value="{{ old('price') }}">Price
                                    </x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="sale_price" required
                                        value="{{ old('sale_price') }}">Sale Price
                                    </x-admin.forms.input-number>
                                    <x-admin.forms.input-number name="qty" required value="{{ old('qty') }}" step='1'>
                                        Quantity
                                    </x-admin.forms.input-number>
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" name="status">
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <x-admin.tags-checkbox />
                                <x-admin.categories-checkbox />
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
                                <hr>
                                <div class="mb-3">
                                    <label for="images" class="form-label">Sub-Images</label>
                                    <input id="images" type="file" name="images[]" class="form-control" multiple>
                                    @if ($errors->has('images.*'))
                                    @foreach ($errors->get('images.*') as $messages)
                                    @foreach($messages as $message)
                                    <div class="invalid-feedback d-block">
                                        Image no: {{ $loop->parent->iteration }} {{ $message }}</div>
                                    @endforeach
                                    @endforeach
                                    @endif
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">
                                            Add
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
</x-admin.layout>

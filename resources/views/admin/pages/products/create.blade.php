@extends('layouts.admin')
@section('title')
Add Product
@endsection
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-light">Settings</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                    href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Add Product</h5>
        <hr />
        <div class="form-body mt-4">
            <div class="row">
                <div class="col-lg">
                    <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <div class="col-xl mb-3">
                                    <label for="name_en" class="form-label">Product Name (en)</label>
                                    <input id="name_en" type="text" name="name_en" required min="3" max="191"
                                        class="form-control @error('name_en') is-invalid @enderror"
                                        placeholder="Product Name in English" value="{{ old('name_en') }}">
                                    @error('name_en')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="name_ar" class="form-label">Product Name (ar)</label>
                                    <input id="name_ar" type="text" name="name_ar" required min="3" max="191"
                                        class="form-control @error('name_ar') is-invalid @enderror"
                                        placeholder="Product Name in Arabic" value="{{ old('name_ar') }}">
                                    @error('name_ar')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl mb-3">
                                    <label for="details_en" class="form-label">Details (en)</label>
                                    <textarea class="form-control @error('details_en') is-invalid @enderror"
                                        id="details_en" name="details_en" placeholder="Details in English..." required
                                        min="3" max="191" rows="3">{{ old('details_en') }}</textarea>
                                    @error('details_en')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="details_ar" class="form-label">Details (ar)</label>
                                    <textarea class="form-control @error('details_ar') is-invalid @enderror"
                                        id="details_ar" name="details_ar" placeholder="Details in Arabic..." required
                                        min="3" max="191" rows="3">{{ old('details_ar') }}</textarea>
                                    @error('details_ar')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description_en" class="form-label">Description (en)</label>
                                <textarea class="form-control @error('description_en') is-invalid @enderror"
                                    id="description_en" name="description_en" required min="3"
                                    placeholder="Description in English..."
                                    rows="3">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description_ar" class="form-label">Description (ar)</label>
                                <textarea class="form-control @error('description_ar') is-invalid @enderror"
                                    id="description_ar" name="description_ar" placeholder="Description in Arabic..."
                                    required min="3" rows="3">{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-xl mb-3">
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
                                </div>
                            </div>
                            <div class="mb-3 form-check form-switch">
                                <input id="status" class="form-check-input" type="checkbox" checked="" name="status">
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
@endsection
@section('extra-js')
@include('admin.includes.product.category-check')
@endsection

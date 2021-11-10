@extends('layouts.admin')
@section('title')
Edit Product
@endsection
@section('extra-css')
<link href="{{ asset('assets/admin/plugins/fancy-file-uploader/fancy_fileupload.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
        <h5 class="card-title">Edit Product</h5>
        <hr />
        @include('includes.alerts.error')
        <div class="form-body mt-4">
            <div class="row">
                <div class="col-lg">
                    <form action="{{ route('admin.product.update', $product->slug) }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <div class="col-xl mb-3">
                                    <label for="name_en" class="form-label">Product Name (en)</label>
                                    <input id="name_en" type="text" name="name_en" required min="3" max="191"
                                        class="form-control @error('name_en') is-invalid @enderror"
                                        placeholder="Product Name in English" value="{{ $product->name_en }}">
                                    @error('name_en')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="name_ar" class="form-label">Product Name (ar)</label>
                                    <input id="name_ar" type="text" name="name_ar" required min="3" max="191"
                                        class="form-control @error('name_ar') is-invalid @enderror"
                                        placeholder="Product Name in Arabic" value="{{ $product->name_ar }}">
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
                                        min="3" max="191" rows="3">{{ $product->details_en }}</textarea>
                                    @error('details_en')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="details_ar" class="form-label">Details (ar)</label>
                                    <textarea class="form-control @error('details_ar') is-invalid @enderror"
                                        id="details_ar" name="details_ar" placeholder="Details in Arabic..." required
                                        min="3" max="191" rows="3">{{ $product->details_ar }}</textarea>
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
                                    rows="3">{{ $product->description_en }}</textarea>
                                @error('description_en')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description_ar" class="form-label">Description (ar)</label>
                                <textarea class="form-control @error('description_ar') is-invalid @enderror"
                                    id="description_ar" name="description_ar" placeholder="Description in Arabic..."
                                    required min="3" rows="3">{{ $product->description_ar }}</textarea>
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
                                            required value="{{ $product->price }}" name="price">
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
                                            required value="{{ $product->sale_price }}" name="sale_price">
                                    </div>
                                    @error('sale_price')
                                    <div class="invalid-feedback">{{ $message}}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <div class="input-group input-spinner">
                                        <input type="number" step="1" class="form-control" min="0" maxlength="9"
                                            required value="{{ $product->quantity }}" name="qty">
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
                                @foreach ($categories as $category )
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="cat_[{{ $category->id }}]"
                                        name="categories[]" value="{{ $category->id }}" @foreach($category_shared as
                                        $shared) @if ($shared===$category->id) checked @endif @endforeach >
                                    <label class="form-check-label" for="cat_[{{ $category->id }}]">{{
                                        $category->name_en }}</label>
                                </div>
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
                            {{-- <div class="card">
                                <div class="card-body">
                                        <input id="image-uploadify" type="file"
                                            accept=".xlsx,.xls,image/*,.jpeg,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                            multiple="" style="display: none;" name="jk[]">
                                        <div class="imageuploadify well">
                                            <div class="imageuploadify-overlay"><i class="fa fa-picture-o"></i></div>
                                            <div class="imageuploadify-images-list text-center"><i
                                                    class="bx bxs-cloud-upload"></i><span
                                                    class="imageuploadify-message">Drag&amp;Drop Your File(s)Here To
                                                    Upload</span><button type="button" class="btn btn-default"
                                                    style="background: white; color: rgb(58, 160, 255);">or select file
                                                    to upload</button></div>
                                        </div>
                                </div>
                            </div> --}}
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
                            </div>
                            <div class="col-12 mt-5">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-light">Add</button>
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
<script src="{{ asset('assets/admin/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script>
    $('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
</script>
<script>
    $(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
</script>
<!--app JS-->
<script src="{{ asset('assets/admin/js/app.js') }}"></script>

@endsection

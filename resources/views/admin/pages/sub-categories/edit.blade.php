@extends('layouts.admin')
@section('title')
Edit Sub-Category
@endsection
@section('content')
<div class="page-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Sub-Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-light">Settings</button>
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
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
            <h5 class="card-title">Edit Sub-Category</h5>
            <hr />
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg">
                        <form action="{{ route('admin.subcategories.update', $category->slug) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <input type="hidden" name="cat_id" value="{{ $category->id }}">
                                    <div class="col-xl mb-3">
                                        <label for="name_en" class="form-label">Category Name (en)</label>
                                        <input id="name_en" type="text" name="name_en" class="form-control"
                                            placeholder="Category Name in English" required min="3" max="255"
                                            value="{{ $category->name_en }}">
                                        @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl mb-3">
                                        <label for="name_ar" class="form-label">Category Name (ar)</label>
                                        <input id="name_ar" type="text" name="name_ar" class="form-control"
                                            placeholder="Category Name in Arabic" required min="3" max="255"
                                            value="{{ $category->name_ar }}">
                                        @error('name_ar')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" checked=""
                                        name="status">
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" name="parent_id" aria-label="Default select example">
                                        <option selected="">Main Category</option>
                                        @foreach ($categories as $cat )
                                        <option value="{{ $cat->id }}" @if($cat->id === $category->parent_id ) selected
                                            @endif>{{ $cat->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Change Image</label>
                                    <input id="image" type="file" name="image" class="form-control">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2 img-style">
                                        <img src="{{asset($category->image) }}" class="img-style"
                                            data-real-src="{{ $category->image }}" alt="category banner">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Change Banner</label>
                                    <input id="image" type="file" name="banner" class="form-control">
                                    @error('banner')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2 img-style">
                                        <img src="{{asset($category->banner) }}" class="img-style"
                                            data-real-src="{{ $category->banner }}" alt="category banner">
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">Update</button>
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

</div>
@endsection

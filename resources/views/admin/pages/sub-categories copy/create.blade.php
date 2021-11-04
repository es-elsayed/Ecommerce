@extends('layouts.admin')
@section('title')
    Add ategories
@endsection
@section('content')
<div class="page-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-light">Settings</button>
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

  <div class="card">
      <div class="card-body p-4">
          <h5 class="card-title">Add New Category</h5>
          <hr/>
           <div class="form-body mt-4">
            <div class="row">
               <div class="col-lg">
               <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="border border-3 p-4 rounded">
                    <div class="row">
                        <div class="col-xl mb-3">
                            <label for="cat_name_en" class="form-label">Category Name (en)</label>
                            <input id="cat_name_en" type="text" name="cat_name_en" class="form-control" placeholder="Category Name in English">
                        </div>
                        <div class="col-xl mb-3">
                            <label for="cat_name_ar" class="form-label">Category Name (ar)</label>
                            <input id="cat_name_ar" type="text" name="cat_name_ar" class="form-control" placeholder="Category Name in Arabic">
                        </div>
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <input id="is_active" class="form-check-input" type="checkbox" checked="">
                        <label for="is_active" class="form-check-label">Activation</label>
                    </div>
                    <div class="mb-3 form-check form-switch">
                        <input id="is_parent" class="form-check-input" type="checkbox" checked="">
                        <label for="is_parent" class="form-check-label">Is Main Category</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled">
                    </div>
                    </div>
               </form>
               </div>
           </div><!--end row-->
        </div>
      </div>
  </div>

</div>
@endsection

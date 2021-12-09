@extends('layouts.admin')
@section('title')
Products
@endsection
@section('content')
{{ Form::hidden('', $increment = 1) }}
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sub Products</li>
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
        <div class="card-body">
            <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="{{ route('admin.product.create') }}" class="btn btn-light radius-30 mt-2 mt-lg-0"><i
                            class="bx bxs-plus-square"></i>Add New Record</a></div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-border">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th>Order#</th>
                            <th>SKU</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Categories</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                            </td>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $product->sku }}</h6>
                            </td>
                            <td><img src="{{ asset($product->main_image) }}" class="maincat-img"
                                    alt="product image"></td>
                            <td>{{ $product->name_en }}</td>
                            <td style="max-width: 15rem; overflow-x: auto;">
                                {{-- <textarea name="categories" id="categories" class="form-control scro" style="width:15rem; line-height: 1" disabled> --}}
                                     @foreach($product->categories as $category )
                                     {{ $category->name_en }}
                                     @if ($loop->count != $loop->iteration)<span class="bold text-danger"> & </span> @endif
                                @endforeach
                                {{-- </textarea> --}}

                            </td>
                            <td>
                                <div
                                    class="badge rounded-pill {{ $product->status ? 'text-success bg-light-success': 'text-danger bg-light-danger' }} p-2 text-uppercase px-3">
                                    <i class="bx bxs-circle me-1"></i>{{ $product->getActive() }}</div>
                            </td>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $product->quantity }}</h6>
                            </td>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ currency($product->price) }}</h6>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{ route('admin.product.edit', $product->slug) }}" class="ms-3"><i class="bx bxs-edit"></i></a>
                                    <a href="{{ route('admin.product.delete', $product->slug) }}" class="ms-3"><i class="bx bxs-trash"></i></a>
                                    @if ($product->status == 0)
                                    <a href="{{ route('admin.product.active', $product->slug) }}" class="success text-capitalize ms-3">Activate</a>
                                    @else
                                    <a href="{{ route('admin.product.unactive', $product->slug) }}" class="danger text-capitalize ms-3">deactivate</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection

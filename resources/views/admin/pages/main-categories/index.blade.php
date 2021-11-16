@extends('layouts.admin')
@section('title')
Main Categories
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
                    <li class="breadcrumb-item active" aria-current="page">Main Categories</li>
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
            @include('includes.alerts.success')
            @include('includes.alerts.error')
            <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="{{ route('admin.maincategory.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Record</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Order#</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                            </td>
                            <td><img src="{{ asset($category->image) }}" class="maincat-img" alt="category image"></td>
                            <td>{{ $category->name_en }}</td>
                            <td>
                                <div
                                    class="badge rounded-pill {{ $category->status ? 'text-success bg-light-success': 'text-danger bg-light-danger' }} p-2 text-uppercase px-3">
                                    <i class="bx bxs-circle me-1"></i>{{ $category->getActive() }}
                                </div>
                            </td>
                            <td>
                                @if ($category->id !== 1 || $category->name_en !== "un-defined")
                                <div class="d-flex order-actions">
                                    <a href="{{ route('admin.maincategory.edit', $category->slug) }}" class="ms-3"><i
                                            class="bx bxs-edit"></i></a>
                                    <a href="{{ route('admin.maincategory.delete', $category->id) }}" class="ms-3"><i
                                            class="bx bxs-trash"></i></a>
                                    @if ($category->status == 0)
                                    <a href="{{ route('admin.maincategory.active', $category->id) }}"
                                        class="success text-capitalize ms-3">Activate</a>
                                    @else
                                    <a href="{{ route('admin.maincategory.unactive', $category->id) }}"
                                        class="danger text-capitalize ms-3">deactivate</a>
                                    @endif
                                </div>
                                @endif
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

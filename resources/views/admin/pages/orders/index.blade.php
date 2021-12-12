@extends('layouts.admin')
@section('title')
Orders
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
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                <div class="ms-auto"><a href="{{ route('admin.maincategory.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                        Record</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th class="text-center">#</th>
                            <th>User</th>
                            <th>products</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $order->id }}</h6>
                            </td>
                            <td>
                                {{ $order->billing_name }}
                            </td>
                            <td style="max-width: 15rem; overflow-x: auto;">
                                @foreach ($order->products as $product)
                                    {{ $product->name }}
                                    @if ($loop->count != $loop->iteration)<span class="bold text-danger"> & </span> @endif
                                @endforeach
                            </td>
                            <td>
                                <div
                                    class="badge rounded-pill p-2 text-uppercase px-3
                                    @switch($order->status)
                                        @case('0')
                                            text-warning bg-light-warning
                                            @break
                                        @case('1')
                                            text-info bg-light-info
                                            @break
                                        @case('2')
                                            text-danger bg-light-danger
                                            @break
                                        @case('3')
                                            text-danger bg-light-danger
                                            @break
                                        @case('4')
                                            text-success bg-light-success
                                            @break
                                        @case('5')
                                            text-danger bg-light-danger
                                            @break
                                    @endswitch
                                    ">
                                    @if ($order->status== "0")
                                    <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                    @else
                                    <i class="bx bxs-circle me-1">
                                    @endif
                                    </i>{{ $order->getActive() }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="" class="ms-3"><i class="bx bxs-edit"></i></a>
                                    <form action="{{ route('admin.orders.store',['id'=>$order->id]) }}" method="POST">
                                        @csrf
                                    @switch($order->status)
                                        @case('0')
                                        <button name="action" value="1" class="custom-a info text-capitalize ms-3">Shipped</button>
                                        <button name="action" value="2" class="custom-a danger text-capitalize ms-3">Rejected</button>
                                            @break
                                        @case('1')
                                        <button name="action" value="4" class="custom-a success text-capitalize ms-3">Delevered</button>
                                        <button name="action" value="5" class="custom-a danger text-capitalize ms-3">Error</button>
                                        @break
                                        @default
                                        @endswitch
                                        </form>
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

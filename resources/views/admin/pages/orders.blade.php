<x-admin.layout title="Orders">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Orders</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        {{ Form::hidden('', $increment = 1) }}
        <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="{{ route('admin.maincategories.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                        Record</a>
                </div>
            </div>
            <div class="table-responsive">
                {{--************** LOGIC ONE **************--}}
                {{-- <table class="table mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th class="text-center">#</th>
                            <th>User</th>
                            <th>products</th>
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
                            <td style="max-width: 13rem; overflow-x: auto;">
                                @foreach ($order->products as $product)
                                {{ $product->name }}
                                @if ($loop->count != $loop->iteration)<span class="bold text-danger"> & </span> @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <form action="{{ route('admin.orders.store',['id'=>$order->id]) }}" method="POST">
                                        @csrf
                                        <button name="action" value="0" class="custom-a warning text-capitalize ms-3">
                                            In Proccess
                                            @if ($order->status== "0")
                                            <i
                                                class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            @endif
                                        </button>
                                        <button name="action" value="1" class="custom-a info text-capitalize ms-3">
                                            Shipped
                                            @if ($order->status== "1")
                                            <i
                                                class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            @endif
                                        </button>
                                        <button name="action" value="2" class="custom-a danger text-capitalize ms-3">
                                            Rejected
                                            @if ($order->status== "2")
                                            <i
                                                class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            @endif
                                        </button>
                                        <button name="action" value="4" class="custom-a success text-capitalize ms-3">
                                            Delevered
                                            @if ($order->status== "4")
                                            <i
                                                class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            @endif
                                        </button>
                                        <button name="action" value="5" class="custom-a danger text-capitalize ms-3">
                                            Error
                                            @if ($order->status== "5")
                                            <i
                                                class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            @endif
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table> --}}
                {{--************** LOGIC TWO **************--}}
                {{-- <table class="table mb-0">
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
                                <div class="badge rounded-pill p-2 text-uppercase px-3
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
                                    <i
                                        class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                    @else
                                    <i class="bx bxs-circle me-1">
                                        @endif
                                    </i>{{ $order->getActive() }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <form action="{{ route('admin.orders.store',['id'=>$order->id]) }}" method="POST">
                                        @csrf @switch($order->status)
                                        @case('0')
                                        <button name="action" value="1"
                                            class="custom-a info text-capitalize ms-3">Shipped</button>
                                        <button name="action" value="2"
                                            class="custom-a danger text-capitalize ms-3">Rejected</button>
                                        <button name="action" value="4"
                                            class="custom-a success text-capitalize ms-3">Delevered</button>
                                        <button name="action" value="5"
                                            class="custom-a danger text-capitalize ms-3">Error</button>
                                        @break
                                        @case('1')
                                        <button name="action" value="0" class="custom-a warning text-capitalize ms-3">In
                                            Proccess</button>
                                        <button name="action" value="2"
                                            class="custom-a danger text-capitalize ms-3">Rejected</button>
                                        <button name="action" value="4"
                                            class="custom-a success text-capitalize ms-3">Delevered</button>
                                        <button name="action" value="5"
                                            class="custom-a danger text-capitalize ms-3">Error</button>
                                        @break
                                        @case('2')
                                        @case('4')
                                        @case('5')
                                        <button name="action" value="0" class="custom-a warning text-capitalize ms-3">In
                                            Proccess</button>
                                        @break
                                        @default
                                        @endswitch
                                    </form>
                                    </form>
                                </div>

                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table> --}}
                {{--************** LOGIC THREE **************--}}
                <table class="table mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th>Name</th>
                            <th>Details</th>
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
                                {{ $product->pivot->quantity ."x ".$product->name }}
                                @if ($loop->count != $loop->iteration)<span class="bold text-danger"> & </span> @endif
                                @endforeach
                            </td>
                            <td>
                                <div class="badge rounded-pill p-2 text-uppercase px-3
                                                    @switch($order->status)
                                                        @case('0')
                                                            text-warning bg-light-warning
                                                            @break
                                                        @case('1')
                                                            text-info bg-light-info
                                                            @break
                                                        @case('2')
                                                        @case('3')
                                                        @case('5')
                                                            text-danger bg-light-danger
                                                            @break
                                                        @case('4')
                                                            text-success bg-light-success
                                                            @break
                                                    @endswitch
                                                    ">
                                    @if ($order->status== "0")
                                    <i
                                        class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                    @else
                                    <i class="bx bxs-circle me-1">
                                        @endif
                                    </i>{{ $order->getStatus() }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <form action="{{ route('admin.orders.store',['id'=>$order->id]) }}" method="POST">
                                        @csrf
                                        <button name="action" value="0" class="custom-a warning text-capitalize ms-3">In Proccess</button>
                                        <button name="action" value="1" class="custom-a info text-capitalize ms-3">Shipped</button>
                                        <button name="action" value="2" class="custom-a danger text-capitalize ms-3">Rejected</button>
                                        <button name="action" value="4" class="custom-a success text-capitalize ms-3">Delevered</button>
                                        <button name="action" value="5" class="custom-a danger text-capitalize ms-3">Error</button>
                                    </form>
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
</x-admin.layout>

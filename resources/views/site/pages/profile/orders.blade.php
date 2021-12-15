@extends('site.pages.profile.layout')
@section('profile-content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order )
                <tr>
                    <td>{{ $loop->count + 1 - $loop->iteration}}</td>
                    <td>{{ $order->created_at ? $order->created_at->format('d/m/Y') : '' }}</td>
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
                            @if ($order->status == "1")
                            <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                            @else
                            <i class="bx bxs-circle me-1">
                            @endif
                            </i>{{ $order->getStatus() }}
                        </div>
                    </td>
                    <td style="max-width: 15rem; overflow-x: auto;">
                        @foreach ($order->products as $product)
                        {{ $product->pivot->quantity ."x ".$product->name }}
                        @if ($loop->count != $loop->iteration)<span class="bold text-danger"> & </span> @endif
                        @endforeach
                    </td>
                    <td>{{ currency($order->billing_total) }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            @if( $order->status == "0" )
                            <form action="{{ route('site.order.cancel',$order->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button name="action" value="3" class="btn btn-light btn-sm rounded-0">Cancel</button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

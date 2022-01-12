@props(['quantity'])
@if ($quantity<10&&$quantity>0)
    <div class="badge rounded-pill p-2 text-uppercase px-3 text-warning bg-light-warning">
        ({{ $quantity }}) in stock
    </div>
    @elseif($quantity <=0) <div class="badge rounded-pill p-2 text-uppercase px-3 text-danger bg-light-danger">
        Out of Stock
        </div>
        @endif

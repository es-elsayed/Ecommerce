@props(['id','name'])
<form action="{{ route('site.favorite.store',['id'=>$id]) }}" method="post">
    @csrf
    <button type="submit" class="bg-transparent border-0" data-name[{{ $id }}]="{{
        $name }}">
        <div class="product-wishlist"> <i class="bx bx-heart"></i>
        </div>
    </button>
</form>

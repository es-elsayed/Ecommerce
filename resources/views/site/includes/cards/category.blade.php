<div class="col">
    <div class="card rounded-0 product-card">
        <a href="{{ route('site.shop.show', $category->slug) }}">
            <img src="{{ asset($category->image) }}" class="card-img-top border-bottom bg-dark-1" alt="...">
        </a>
        <div class="list-group list-group-flush">
            <a href="{{ route('site.shop.show', $category->slug) }}" class="list-group-item bg-transparent">
                <h6 class="mb-0 text-uppercase">{{ $category->name }}</h6>
            </a>
        </div>
    </div>
</div>

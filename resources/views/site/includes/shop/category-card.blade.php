<div class="col">
    <div class="card rounded-0 product-card">
        <a href="{{ route('site.category.show', $category->slug) }}">
            <img src="{{ asset($category->image) }}" class="card-img-top border-bottom bg-dark-1" alt="...">
        </a>
        <div class="list-group list-group-flush">
        <a href="{{ route('site.category.show', $category->slug) }}" class="list-group-item bg-transparent">
                <h6 class="mb-0 text-uppercase">{{ $category->name_en }}</h6>
        </a>
        @foreach (\App\Models\Category::getChildrenByParentId($category->id) as $sub_cat )
        <a href="{{ route('site.category.show', $category->slug) }}" class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
            {{ $sub_cat->name_en? $sub_cat->name_en : '' }}
        <span class="badge bg-light rounded-pill">14</span>
        </a>
        @endforeach
        </div>
    </div>
</div>

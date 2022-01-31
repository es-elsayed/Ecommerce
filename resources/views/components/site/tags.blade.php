<div class="col">
    <div class="footer-section3 mb-3">
        <h6 class="mb-3 text-uppercase"> {{ __('content.popular tags') }} </h6>
        <div class="tags-box">
            @foreach ($tags as $tag )
            <a href="{{ route('site.products.search',['tag'=>$tag->name]) }}" class="tag-link">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</div>

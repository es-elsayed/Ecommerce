@props(['brands'])
<section class="py-4">
    <div class="container">
        <h3 class="d-none">Brands</h3>
        <div class="brand-grid">
            <div class="brands-shops owl-carousel owl-theme border owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2969px, 0px, 0px); transition: all 0.25s ease 0s; width: 5568px;">
                        @foreach ($brands as $brand )
                        <div class="owl-item" style="background-color: rgb(16, 67, 37); width: 371.173px;">
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset($brand->image) }}" title="{{ $brand->title_en }}" class="img-fluid" alt="{{ $brand->title_en }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
                <div class="owl-thumbs"></div>
            </div>
        </div>
    </div>
</section>

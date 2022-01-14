@props(['categories'])
<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">Browse Catergory</h5>
            {{-- <a href="shop-categories.html" class="btn btn-dark ms-auto rounded-0">View All<i
                    class="bx bx-chevron-right"></i></a> --}}
        </div>
        <hr>
        <div class="product-grid">
            <div class="browse-category owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-3096px, 0px, 0px); transition: all 0.25s ease 0s; width: 6757px;">
                        @foreach ($categories as $category )
                        <x-site.cards.category :category="$category" />
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

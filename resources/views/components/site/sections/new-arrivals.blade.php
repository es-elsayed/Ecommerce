@props(['products'])
<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">New Arrivals</h5>
            {{-- <a href="javascript:;" class="btn btn-light ms-auto rounded-0">View All<i
                    class="bx bx-chevron-right"></i></a> --}}
        </div>
        <hr>
        <div class="product-grid">
            <div class="new-arrivals owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2611px, 0px, 0px); transition: all 0.25s ease 0s; width: 6269px;">
                        @foreach ($products as $product )
                        <div class="owl-item" style="width: 251.2px; margin-right: 10px;">
                            <div class="item">
                                <x-site.cards.product-item :product="$product"/>
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

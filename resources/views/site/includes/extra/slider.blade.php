<section class="slider-section">
    <div class="first-slider">
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0; $i < count($sliders); $i++) <li data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="{{ $i }}" class="">
                    </li>
                    @endfor
            </ol>
            <div class="carousel-inner">
                @foreach ($sliders as $slider )
                <div class="carousel-item @if ($loop->iteration === 1)
                    active
                @endif">
                    <div class="row d-flex align-items-center">
                        <div class="col d-none d-lg-flex justify-content-center">
                            <div class="">
                                {{-- <h3 class="h3 fw-light">Complete your look with</h3> --}}
                                <h3 class="h1">{{ $slider->title }}</h3>
                                <p class="pb-3">{{ $slider->description }}</p>
                                <div class=""> <a class="btn btn-light btn-ecomm" href="{{ $slider->link }}">{{
                                        __('content.shop now') }}<i class="bx bx-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset($slider->image) }}" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span
                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span
                    class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>

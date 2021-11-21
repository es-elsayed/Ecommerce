@extends('layouts.site')
@section('title')
    Shop
@endsection
@section('content')
    <div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Shop</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="{{ route('site.home') }}"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Shop</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop categories-->
				<section class="py-4">
					<div class="container">
						<div class="product-categories">
							<div class="row row-cols-1 row-cols-lg-4">
                            @if ($categories)
                                @foreach ($categories as $category )
                                @include('site.includes.shop.category-card')
                                @endforeach
                            @endif
                            </div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop categories-->
			</div>
@endsection

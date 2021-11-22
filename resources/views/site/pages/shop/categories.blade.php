@extends('layouts.site')
@section('title')
    Shop
@endsection
@section('content')
    <div class="page-content">
				<!--start breadcrumb-->
				@include('site.includes.shop.header')
				<!--end breadcrumb-->
				<!--start shop categories-->
				<section class="py-4">
					<div class="container">
						<div class="product-categories">
							<div class="row row-cols-1 row-cols-lg-4">
                                @forelse ($categories as $category )
                                @include('site.includes.category.category-card')
                                @empty
                                <div>No Products</div>
                                @endforelse
                            </div>
							<!--end row-->
						</div>
					</div>
				</section>
                <div class="links">
                    {{ $categories->links() }}
                </div>
				<!--end shop categories-->
			</div>
@endsection

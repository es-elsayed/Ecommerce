@extends('layouts.site')
@section('title')
    Shop
@endsection
@section('content')
				<!--start breadcrumb-->
				@include('site.includes.headers.shop')
				<!--end breadcrumb-->
				<!--start shop categories-->
				<section class="py-4">
                    <div class="container">
                        <div class="product-categories">
							<div class="row row-cols-1 row-cols-lg-4">
                                @forelse ($categories as $category )
                                @include('site.includes.cards.category')
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
@endsection

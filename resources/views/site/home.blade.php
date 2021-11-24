@extends('layouts.site')
@section('content')
    @if (count($sliders)>0)
        @include('site.includes.home.slider')
    @endif
    @if (count($products)>0)
        @include('site.includes.home.product-section')
    @endif
@endsection

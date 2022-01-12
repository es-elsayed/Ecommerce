<x-site.layout>
    <x-slot name="title">
        {{ __('content.home') }}
    </x-slot>

    @if (count($sliders ?? []) > 0)
    <x-site.includes.slider :sliders="$sliders" />
    @endif
    <x-site.sections.information/>
    <x-site.sections.pramotion/>

    @if (count($featured_products ?? []) > 0)
    <x-site.sections.product :products="$featured_products" :name="__('content.featured products')"
        :route="route('site.shop.product.featured')" />
    @endif

    @if (count($top_rated ?? []) > 0)
    <x-site.sections.product :products="$top_rated" :name="__('content.top rated products')"
        :route="route('site.shop.product.toprated')" />
    @endif
</x-site.layout>

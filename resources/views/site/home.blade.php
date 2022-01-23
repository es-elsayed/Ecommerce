<x-site.layout>
    <x-slot name="title">
        {{ __('content.home') }}
    </x-slot>

    @if (count($sliders ?? []) > 0)
    <x-site.includes.slider :sliders="$sliders" />
    @endif
    <x-site.sections.information/>

    @if (count($featured_products ?? []) > 0)
    <x-site.sections.product :products="$featured_products" :name="__('content.featured products')"
        :route="route('site.products.search',['tab'=>'featured'])" />
    @endif

    @if (count($top_rated ?? []) > 0)
    <x-site.sections.product :products="$top_rated" :name="__('content.top rated products')"
        :route="route('site.products.search',['tab'=>'top-rated'])" />
    @endif

    <x-site.sections.new-arrivals :products="$new_arrivals" />
    <x-site.sections.categories :categories="$main_categories"/>

    <x-site.sections.support-info />

    <x-site.sections.brands :brands="$brands"/>

</x-site.layout>

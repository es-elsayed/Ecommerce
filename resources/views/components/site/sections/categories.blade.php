@props(['categories'])
<x-site.sections.automatic-slider name="Brands">
    @foreach ($categories as $category )
    <x-site.cards.category-owl :category="$category" />
    @endforeach
</x-site.sections.automatic-slider>

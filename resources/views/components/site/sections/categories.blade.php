@props(['categories'])
<x-site.sections.automatic-slider name="Category">
    @foreach ($categories as $category )
    <x-site.cards.category-owl :category="$category" />
    @endforeach
</x-site.sections.automatic-slider>

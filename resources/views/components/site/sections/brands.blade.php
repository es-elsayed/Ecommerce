@props(['brands'])
<x-site.sections.automatic-slider name="Brands" hidename>
    @foreach ($brands as $brand )
    <x-site.cards.brand :brand="$brand" />
    @endforeach
</x-site.sections.automatic-slider>

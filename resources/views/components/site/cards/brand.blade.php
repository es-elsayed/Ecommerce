@props(['brand'])
<div class="owl-item owl-brand" style="width: 371.173px;">
    <div class="item border-end">
        <div class="p-4">
            <a href="javascript:;">
                <img src="{{ asset($brand->image) }}" title="{{ $brand->title_en }}" class="img-fluid"
                    alt="{{ $brand->title_en }}">
            </a>
        </div>
    </div>
</div>

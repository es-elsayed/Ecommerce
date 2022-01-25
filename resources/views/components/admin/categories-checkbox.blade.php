@props(['products'=>1])
<div class="mb-3">
    <label for="status" class="form-check-label d-block mb-3  border-top pt-3">Category</label>
    @foreach ($parent_categories as $parent_category)
    <ul style="list-style-type: none">
        <li><input class="form-check-input" type="checkbox" id="cat_[{{ $parent_category->id }}]" name="categories[]"
                value="{{ $parent_category->id }}" @if ($product ?? null) @foreach($category_shared as $shared)
                @if($shared===$parent_category->id) checked @endif
            @endforeach
            @endif>
            <label class="form-check-label" for="cat_[{{ $parent_category->id }}]">{{
                $parent_category->name_en }}</label>
            <ul>
                @foreach($parent_category->childs as $sub_cat)
                <li class="d-inline-block me-3">
                    <input class="form-check-input sub-cat" type="checkbox" id="cat_[{{ $sub_cat->id }}]"
                        name="categories[]" value="{{ $sub_cat->id }}" @if ($product ?? null) @foreach($category_shared
                        as $shared) @if($shared===$sub_cat->id) checked @endif
                    @endforeach
                    @endif
                    >
                    <label class="form-check-label" for="cat_[{{ $sub_cat->id }}]">{{
                        $sub_cat->name }}</label>

                </li>
                @endforeach
            </ul>

        </li>
    </ul>
    @endforeach
    @if ($errors->has('categories'))
    @foreach ($errors->get('categories') as $message)
    <div class="invalid-feedback d-block">{{ $message }}</div>
    @endforeach

    @endif
    @if ($errors->has('categories.*'))
    @foreach ($errors->get('categories.*') as $messages)
    @foreach($messages as $message)
    <div class="invalid-feedback d-block">Image no: {{ $loop->parent->iteration }} {{
        $message }}</div>
    @endforeach
    @endforeach
    @endif

</div>

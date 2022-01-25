<div class="mb-3">
    <label for="status" class="form-check-label d-block mb-3 border-top pt-3">Tags</label>
    <ul style="list-style-type: none">
        @if ($tags?? false)
        @foreach ($tags as $tag )
        <li class="d-inline-block me-3">
            <input class="form-check-input" type="checkbox" name="tags[]" id="tag_[{{ $tag->id }}]"
                value="{{ $tag->id }}" />
            <label class="form-check-label" for="tag_[{{ $tag->id }}]">
                {{ $tag->name_en }}</label>
        </li>
        @endforeach
        @endif
    </ul>
</div>

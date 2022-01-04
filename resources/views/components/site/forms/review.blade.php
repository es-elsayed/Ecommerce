@props(['id'])
<form action="{{ route('site.review.store',['id'=>$id]) }}" method="post">
    @csrf
    <div class="radio-stars mb-3">
    <input class="sr-only" id="radio-5" name="rate" type="radio" value="5" />
    <label class="radio-star" for="radio-5">5</label>
    <input checked="" class="sr-only" id="radio-4" name="rate" type="radio" value="4" />
    <label class="radio-star" for="radio-4">4</label>
    <input class="sr-only" id="radio-3" name="rate" type="radio" value="3" />
    <label class="radio-star" for="radio-3">3</label>
    <input class="sr-only" id="radio-2" name="rate" type="radio" value="2" />
    <label class="radio-star" for="radio-2">2</label>
    <input class="sr-only" id="radio-1" name="rate" type="radio" value="1" />
    <label class="radio-star" for="radio-1">1</label>
    <span class="radio-star-total"></span>
    </div>
    <div class="mb-3">
        <label class="form-label">Comment:</label>
        <textarea name="comment" class="form-control rounded-0" rows="3" placeholder="write acomment here..."></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-white btn-ecomm">
            {{ __('Add Review') }}
        </button>
    </div>
</form>

@props(['review'])
<div class="d-flex align-items-baseline">
    <div class="review-content ms-3 w-100">
        <div class="rates cursor-pointer fs-6">
            <x-site.cards.rate :rate="$review->rate" />
        </div>
        <div class="d-flex align-items-center mb-2">
            <h6 class="mb-0">{{ $review->user->f_name." ".$review->user->l_name }}</h6>
            <p class="mb-0 ms-auto">{{ $review->created_at ? $reviews->created_at->format('d F Y') : '' }}</p>
        </div>
        <p class="w-100">{{ $review->comment }}</p>
        @if (auth()->user())
        @if ($review->user_id === auth()->user()->id)
        <x-site.forms.btn-delete :action="route('site.review.destroy',$review->id)" />
        @endif
        @endif
    </div>
</div>

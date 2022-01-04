<form {{ $attributes->merge(['action' => '']) }} method="post">
    @csrf
    @method('delete')
    <button class="btn btn-light rounded-0 btn-ecomm">
        <i class="bx bx-x-circle me-1"></i> Remove
    </button>
</form>

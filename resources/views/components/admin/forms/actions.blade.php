@props(['route','value','id'])
<form action='{{ route("admin.".$route, $id) }}' method="post">
    @csrf
    @method('put')
    <input type="hidden" name="status" value="{{ $value }}">
    <button type="submit" class="ms-3">
        {{ $slot }}
    </button>
</form>

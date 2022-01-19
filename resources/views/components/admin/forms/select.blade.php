@props(['name'])

<div class="mb-3">
    <select class="form-select" name="{{ $name }}" aria-label="Default select example">
        {{ $slot }}
    </select>
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

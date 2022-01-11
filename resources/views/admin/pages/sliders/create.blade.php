<x-admin.layout title="Add Slider">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Add Slider</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Add Slider</h5>
        <hr />
        <div class="form-body mt-4">
            <div class="row">
                <div class="col-lg">
                    <form action="{{ route('admin.sliders.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <div class="col-xl mb-3">
                                    <label for="title_en" class="form-label">Title (en)</label>
                                    <input id="title_en" type="text" name="title_en" required min="3" max="191"
                                        class="form-control @error('title_en') is-invalid @enderror"
                                        placeholder="Title in English" value="{{ old('title_en') }}">
                                    @error('title_en')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl mb-3">
                                    <label for="title_ar" class="form-label">Title (ar)</label>
                                    <input id="title_ar" type="text" name="title_ar" required min="3" max="191"
                                        class="form-control @error('title_ar') is-invalid @enderror"
                                        placeholder="Title in Arabic" value="{{ old('title_ar') }}">
                                    @error('title_ar')
                                    <div class="invalid-feedback">{{ $message
                                        }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description_en" class="form-label">Description (en)</label>
                                <textarea class="form-control @error('description_en') is-invalid @enderror"
                                    id="description_en" name="description_en" required min="3"
                                    placeholder="Description in English..."
                                    rows="3">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description_ar" class="form-label">Description (ar)</label>
                                <textarea class="form-control @error('description_ar') is-invalid @enderror"
                                    id="description_ar" name="description_ar" placeholder="Description in Arabic..."
                                    required min="3" rows="3">{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                <div class="invalid-feedback">{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-xl mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input id="link" type="text" name="link" required min="3" max="191"
                                    class="form-control @error('link') is-invalid @enderror"
                                    placeholder="ex: https://www.expamle.com.ar/" value="{{ old('link') }}">
                                @error('link')
                                <div class="invalid-feedback">{{ $message
                                    }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-check form-switch">
                                <input id="status" class="form-check-input" type="checkbox" checked="" name="status">
                                <label for="status" class="form-check-label">Activation</label>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Select Image</label>
                                <input id="image" type="file" name="image" class="form-control">
                                @if ($errors->has('image'))
                                @foreach ($errors->get('image') as $message)
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @endforeach
                                @endif
                            </div>
                            <div class="col-12 mt-5">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-light">Add</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
</x-admin.layout>

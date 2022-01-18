{{-- Decide route is store or update --}}
@php
$route =route("admin.brands.store");
$method = false;
$title = "Add Brand";
if (Route::currentRouteName() == "admin.brands.edit") {
$route = route("admin.brands.update",$brand->id);
$method = true;
$title = "Edit Brand";
}
@endphp
{{-- End --}}
<x-admin.layout :title="$title">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>{{ $title }}</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">{{ $title }}</h5>
            <hr />
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg">
                        <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                            @if ($method ?? 0)
                            @method('put')
                            @endif
                            @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="name_en" placeholder="Name In English"
                                        value="{{ $brand->name_en ?? old('name_en') }}">Name (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="name_ar" placeholder="Name In Arabic"
                                        value="{{ $brand->name_ar ?? old('name_ar') }}">Name (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="title_en" placeholder="Title In English"
                                        value="{{ $brand->title_en ?? old('title_en') }}">Title (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="title_ar" placeholder="Title In Arabic"
                                        value="{{ $brand->title_ar ?? old('title_ar') }}">Title (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="alt_en" placeholder="Alt In English"
                                        value="{{ $brand->alt_en ?? old('alt_en') }}">Alt (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="alt_ar" placeholder="Alt In Arabic"
                                        value="{{ $brand->alt_ar ?? old('alt_ar') }}">Alt (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" checked=""
                                        name="status">
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Select Image</label>
                                    <input id="image" type="file" name="image" class="form-control">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">Add</button>
                                    </div>
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

<x-admin.layout title="Edit Main Category">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Edit Main Category</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Edit Main-Category</h5>
            <hr />
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg">
                        <form action="{{ route('admin.maincategories.update',$category->slug) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <input type="hidden" name="cat_id" value="{{ $category->id }}">
                                    <div class="col-xl mb-3">
                                        <label for="name_en" class="form-label">Category Name (en)</label>
                                        <input id="name_en" type="text" name="name_en" class="form-control"
                                            placeholder="Category Name in English" required min="3" max="255"
                                            value="{{ $category->name_en }}">
                                        @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-xl mb-3">
                                        <label for="name_ar" class="form-label">Category Name (ar)</label>
                                        <input id="name_ar" type="text" name="name_ar" class="form-control"
                                            placeholder="Category Name in Arabic" required min="3" max="255"
                                            value="{{ $category->name_ar }}">
                                        @error('name_ar')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 form-check form-switch">
                                    <input id="status" class="form-check-input" type="checkbox" @if ($category->active())
                                        checked=""
                                    @endif
                                        name="status">
                                    <label for="status" class="form-check-label">Activation</label>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Change Image</label>
                                    <input id="image" type="file" name="image" class="form-control">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2 img-style">
                                        <img src="{{asset($category->image) }}" class="img-style"
                                            data-real-src="{{ $category->image }}" alt="category banner">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Change Banner</label>
                                    <input id="image" type="file" name="banner" class="form-control">
                                    @error('banner')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-2 img-style">
                                        <img src="{{asset($category->banner) }}" class="img-style"
                                            data-real-src="{{ $category->banner }}" alt="category banner">
                                    </div>
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

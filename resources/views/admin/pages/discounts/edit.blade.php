@php
$title = "Edit Discout";
@endphp
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
                        <form action="{{ route('admin.discounts.update',$discount->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <x-admin.forms.input-number step="1" name="discount" required
                                        value="{{ $discount->discount }}">
                                        Discount (%)
                                    </x-admin.forms.input-number>
                                    <div class="col-xl mb-3">
                                        <label for="category" class="form-label">Select Category</label>
                                        <select class="form-select" name="category_id"
                                            aria-label="Default select example">
                                            <option selected="">Choose from Main Categories</option>
                                            @foreach ($categories as $category )
                                            <option value="{{ $category->id }}" {{ $category->id == $discount->category_id ?
                                                'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <x-admin.forms.textarea name="description_en"
                                        placeholder="Enter Description  in English" value="{{ $discount->description_en }}">
                                        Description
                                        (en)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <x-admin.forms.textarea name="description_ar"
                                        placeholder="Enter Description  in Arabic" value="{{  $discount->description_ar }}">
                                        Description
                                        (ar)
                                    </x-admin.forms.textarea>
                                </div>
                                <div class="row">
                                    <div class="col-xl">
                                        <div class="mb-3">
                                            <label class="form-label">Start from:</label>
                                            <input type="datetime-local" class="form-control" name="from"
                                                value="{{ Carbon\Carbon::parse($discount->from)->format('Y-m-d\TH:i')  }}">
                                            @error('from')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl">
                                        <div class="mb-3">
                                            <label class="form-label">End in:</label>
                                            <input type="datetime-local" class="form-control" name="to"
                                                value="{{ Carbon\Carbon::parse($discount->to)->format('Y-m-d\TH:i') }}">
                                            @error('to')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input id="image" type="file" name="image" class="form-control">
                                    <div class="d-block my-2">
                                        <img src="{{ asset($discount->image) }}" alt="" id="img">
                                    </div>
                                    @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">
                                            Add
                                        </button>
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
    <script>
        image.onchange = evt => {
        const [file] = image.files
        if (file) {
            img.src = URL.createObjectURL(file)
        }
        }
    </script>
</x-admin.layout>

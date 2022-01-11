<x-admin.layout title="Main Categories">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Main Categories</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            {{ Form::hidden('', $increment = 1) }}
            <div class="position-relative">
                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="{{ route('admin.maincategories.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Record</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                            </td>
                            <td><img src="{{ asset($category->image) }}" class="maincat-img" alt="category image"></td>
                            <td>{{ $category->name_en }}</td>
                            <td>
                                <div
                                    class="badge rounded-pill {{ $category->status ? 'text-success bg-light-success': 'text-danger bg-light-danger' }} p-2 text-uppercase px-3">
                                    <i class="bx bxs-circle me-1"></i>{{ $category->getActive() }}
                                </div>
                            </td>
                            <td>
                                @if ($category->id !== 1 || $category->name_en !== "un-defined")
                                <div class="d-flex order-actions">
                                    <a href="{{ route('admin.maincategories.edit', $category->slug) }}" class="ms-3"><i
                                            class="bx bxs-edit"></i></a>
                                            <form action="{{ route('admin.maincategories.destroy', $category->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="ms-3"><i class="bx bxs-trash"></i></button>
                                            </form>
                                    @if ($category->status == 0)
                                    <a href="{{ route('admin.maincategories.active', $category->id) }}"
                                        class="custom-a success text-capitalize ms-3">Activate</a>
                                    @else
                                    <a href="{{ route('admin.maincategories.unactive', $category->id) }}"
                                        class="custom-a danger text-capitalize ms-3">deactivate</a>
                                    @endif
                                </div>
                                @endif
                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
</x-admin.layout>

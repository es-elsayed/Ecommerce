<x-admin.layout title="Tags">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Tags</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            {{ Form::hidden('', $increment = 1) }}
            <div class="d-lg-flex align-items-center mb-4 gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                        class="position-absolute top-50 product-show translate-middle-y"><i
                            class="bx bx-search"></i></span>
                </div>
                <div class="ms-auto"><a href="{{ route('admin.tags.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                        Record</a></div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-border">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th>Name (en)</th>
                            <th>Name (ar)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($tags as $tag )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                            </td>
                            <td>{{ $tag->name_en }}</td>
                            <td>{{ $tag->name_ar }}</td>
                            <td>
                                <div class="d-inline-block order-actions">
                                    <a href="{{ route('admin.tags.edit', $tag->id) }}" class="ms-3"><i
                                            class="bx bxs-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-3">
                {{ $tags->links() ?? '' }}
            </div>
        </div>
    </div>
</x-admin.layout>

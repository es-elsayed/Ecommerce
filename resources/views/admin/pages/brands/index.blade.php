<x-admin.layout title="Products">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Products</x-admin.includes.breadcrumb>
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
                <div class="ms-auto"><a href="{{ route('admin.products.create') }}"
                        class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                        Record</a></div>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 table-border">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand )
                        <tr>
                            <td>
                                <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                            </td>
                            <td><img src="{{ asset($brand->image) }}" title="{{ asset($brand->title) }}"
                                    class="maincat-img" alt="{{ asset($brand->alt) }}">
                            </td>
                            <td>{{ $brand->name_en }}</td>
                            <td>
                                <div
                                    class="badge rounded-pill {{ $brand->status ? 'text-success bg-light-success': 'text-danger bg-light-danger' }} p-2 text-uppercase px-3">
                                    <i class="bx bxs-circle me-1"></i>{{ $brand->getActive() }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{ route('admin.brands.edit', $brand->id) }}" class="ms-3"><i
                                            class="bx bxs-edit"></i></a>
                                    @if ($brand->status == 0)
                                    <x-admin.forms.actions :route="'brands.activate'" :value="1" :id="$brand->id">
                                        <i class="lni lni-checkmark-circle text-success"></i>
                                    </x-admin.forms.actions>
                                    @else
                                    <x-admin.forms.actions :route="'brands.activate'" :value="0" :id="$brand->id">
                                        <i class="lni lni-ban text-danger"></i>
                                    </x-admin.forms.actions>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        {{ Form::hidden('', $increment += 1) }}
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-3">
                {{ $brands->links() ?? '' }}
            </div>
        </div>
    </div>
</x-admin.layout>

<x-admin.layout title="Discounts">

    <!--breadcrumb-->
    <x-admin.includes.breadcrumb>Discounts</x-admin.includes.breadcrumb>
    <!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        {{ Form::hidden('', $increment = 1) }}
        <div class="d-lg-flex align-items-center mb-4 gap-3">
            <div class="position-relative">
                <input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                    class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
            </div>
            <div class="ms-auto"><a href="{{ route('admin.discounts.create') }}"
                    class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                    Record</a></div>
        </div>
        <div class="table-responsive">
            <table class="table mb-0 table-border">
                <thead class="table-light">
                    <tr class="text-center">
                        <th class="text-center">#</th>
                        <th>Discount</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description (en)</th>
                        <th>Description (ar)</th>
                        <th>from</th>
                        <th>to</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($discounts as $discount )
                    <tr>
                        <td>
                            <h6 class="mb-0 font-14 text-center">{{ $increment }}</h6>
                        </td>
                        <td>
                            <h6 class="mb-0 font-14 text-center">{{ $discount->discount }}</h6>
                        </td>
                        <td><img src="{{ asset($discount->image) }}" class="maincat-img" alt="product image">
                        </td>
                        <td style="max-width: 15rem; overflow-x: auto;">
                            <p style="width:100%; height: 100%; overflow: auto;" disabled>
                                {{ $discount->description_en }}
                            </p>
                        </td>
                        <td style="max-width: 15rem; overflow-x: auto;">
                            <p style="width:100%; height: 100%; overflow: auto;" disabled>
                                {{ $discount->description_ar }}
                            </p>
                        </td>
                        <td>
                            <h6 class="mb-0 font-14 text-center">{{ $discount->category_id }}</h6>
                        </td>
                        <td>
                            <h6 class="mb-0 font-14 text-center">{{  Carbon\Carbon::parse($discount->from)->format('d-m-Y i') }}</h6>
                        </td>
                        <td>
                            <h6 class="mb-0 font-14 text-center">{{  $discount->to }}</h6>
                        </td>
                        <td>
                            <div class="d-flex order-actions">
                                <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="ms-3"><i
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
            {{ $discounts->links() }}
        </div>
    </div>
</div>
</x-admin.layout>

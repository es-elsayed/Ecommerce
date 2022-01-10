<x-admin.layout title="Messages">
    {{ Form::hidden('', $increment = 1) }}
    <div class="page-content">
        <div class="card">
            <div class="card-body">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message )
                            <tr>
                                <td style="vertical-align: middle;" class="mb-0 font-18 text-center">
                                    {{ $increment }}
                                </td>
                                <td style="vertical-align: middle;" class="mb-0 font-18 text-center">
                                    {{ $message->name }}
                                </td>
                                <td style="vertical-align: middle;" class="mb-0 font-18 text-center">
                                    {{ $message->phone }}
                                </td>
                                <td style="vertical-align: middle;" class="mb-0 font-18 text-center">
                                    {{ $message->email }}
                                </td>
                                <td style="vertical-align: middle;">
                                    <x-admin.forms.textarea name="message" value="{{ $message->message }}" rows="4" cols="100"></x-admin.forms.textarea>
                                    {{-- <p style="width:100%; height: 100%; overflow: auto;" disabled>
                                        {{ $message->message }}
                                    </p> --}}
                                </td>
                                <td style="vertical-align: middle;">
                                    <div class="d-flex order-actions">
                                        <x-admin.forms.actions :route="'messages.destroy'" :value="0"
                                            :id="$message->id">
                                            <i class="lni lni-checkmark-circle text-success"></i>
                                        </x-admin.forms.actions>
                                    </div>
                                </td>
                            </tr>
                            {{ Form::hidden('', $increment += 1) }}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


</x-admin.layout>

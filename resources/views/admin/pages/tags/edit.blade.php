@php
$title = "Edit Tag";
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
                        <form action="{{ route("admin.tags.update",$tag->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" name="id" value="{{ $tag->id }}">
                            <div class="border border-3 p-4 rounded">
                                <div class="row">
                                    <x-admin.forms.input-text type="text" name="name_en" placeholder="Name In English"
                                        value="{{ $tag->name_en }}">Name (en)
                                    </x-admin.forms.input-text>
                                    <x-admin.forms.input-text type="text" name="name_ar" placeholder="Name In Arabic"
                                        value="{{ $tag->name_ar }}">Name (ar)
                                    </x-admin.forms.input-text>
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-light">Update</button>
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

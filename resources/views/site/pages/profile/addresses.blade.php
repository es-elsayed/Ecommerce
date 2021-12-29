@extends('site.pages.profile.layout')
@section('profile-content')
<div class="card-body">
    <h6 class="mb-4">The following addresses will be used on the checkuot page by default.</h6>
    <div class="row">
        <h5 class="mb-3">Shipping Addresses</h5>
            @foreach ($addresses as $address )
            <address class="col-12 my-3 d-flex justify-content-between">
                {{ $address->region->name }},
                {{ $address->city->name }},
                {{ $address->address }}
                ({{ $address->zip }})
                <form action="{{ route('site.address.destroy',$address->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-light rounded-0 btn-ecomm">
                    <i class="bx bx-x-circle me-0"></i></button>
            </form>
            </address>

            <div class="border-bottom"></div>
            @endforeach
    </div>
    <form method="POST" action="{{ route('site.address.store') }}" class="row g-3">
        @csrf
        @include('site.includes.extra.add-address')
        <div class="col-md-6 hide-address">
            <input type="hidden" name="save_address" value="true">
            <div class="d-grid">
                <button type="submit" class="btn btn-white btn-ecomm">
                    Add New Address
                </button>
            </div>
        </div>
    </form>
    <!--end row-->
</div>
@endsection
{{-- <input class="form-check-input" type="checkbox" id="save_address" name="save_address" checked=""> --}}

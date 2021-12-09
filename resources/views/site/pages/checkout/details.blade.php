@extends('layouts.site')
@section('title')
    Checkout
@endsection
@section('content')
    <!--start breadcrumb-->
@include('site.includes.headers.checkout')
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="py-4">
        <div class="container">
            <div class="shop-cart">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="checkout-details">
                            <div class="card bg-transparent rounded-0 shadow-none">
                                @include('site.includes.cards.cart-track')
                            </div>
                            <div class="card rounded-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <img src="{{ auth()->user()->image }}" width="90" alt="" class="rounded-circle p-1 border">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0">{{ auth()->user()->f_name." ".auth()->user()->l_name }}</h6>
                                            <p class="mb-0">{{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="ms-auto">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-edit"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card rounded-0">
                                {{-- <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-grid">
                                            <a href="{{ route('site.checkout.renderbilling') }}" class="btn btn-white btn-ecomm billing-address">
                                                <i class="bx bx-chevron-down"></i>Billing Address
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-grid">
                                            <a href="{{ route('site.checkout.rendernew') }}" class="btn btn-light btn-ecomm new-address">
                                                New Address<i class="bx bx-chevron-down"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="card-body">
                                    <div class="border p-3">
                                        <div class="form-body">
                                            <form method="POST" action="{{ route('site.checkout.address.store') }}" class="row g-3">
                                                @csrf
                                                <div class="col-md-12">
                                                    <h6 class="mb-0 h5">Address</h6>
                                                    <div class="my-3 border-bottom"></div>
                                                    @foreach ($addresses as $address)
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="address_choise" value="{{ $address->id }}" type="radio" id="address_{{ $loop->iteration }}">
                                                        <label class="form-check-label" for="address_{{ $loop->iteration }}">
                                                            {{ $address->region->name }},
                                                            {{ $address->city->name }},
                                                            {{ $address->address }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                    @error("address_choise")
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <br>
                                                    <input class="form-check-input" name="address_choise" value="new" type="radio" id="new_address">
                                                    <label class="form-check-label" for="new_address">
                                                        Add new Address
                                                    </label>
                                                </div>
                                                {{-- <h2 class="h5 mb-0">Address</h2>
                                                <div class="my-3 border-bottom"></div> --}}
                                                    <div class="col-md-6 hide-address">
                                                        <label class="form-label">{{ __('content.region') }}</label>
                                                        <input autocomplete="off" list="regions" name="region" id="region" value="{{ old('region') }}" class="form-control rounded-0" placeholder="{{ __('content.enter region') }}">
                                                        @error('region')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <datalist id="regions">
                                                        </datalist>
                                                    </div>
                                                    <div class="col-md-6 hide-address">
                                                        <label class="form-label">{{ __('content.city') }}</label>
                                                        <input autocomplete="off" list="citys" name="city" id="city" value="{{ old('city') }}" class="form-control rounded-0" placeholder="{{ __('content.enter city') }}">
                                                        @error('city')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <datalist id="citys">
                                                        </datalist>
                                                    </div>
                                                    <div class="col-md-6 hide-address">
                                                        <label class="form-label">{{ __('content.address') }}</label>
                                                        <input type="text" class="form-control rounded-0" id="address" name="address" value="{{ old('address') }}">
                                                        @error('address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 hide-address">
                                                        <label class="form-label">Zip/Postal Code</label>
                                                        <input type="text" name="zip" class="form-control rounded-0" value="{{ old('zip') }}">
                                                        @error('zip')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12 form-check hide-address">
                                                        <input class="form-check-input" type="checkbox" id="save_address" name="save_address" checked="">
                                                        <label class="form-check-label" for="save_address">Save new Address</label>
                                                    </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">
                                                        <a href="{{ route('site.cart.list') }}" class="btn btn-light btn-ecomm">
                                                            <i class="bx bx-chevron-left"></i>Back to Cart
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-white btn-ecomm">
                                                            Proceed to Shipping<i class="bx bx-chevron-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('site.includes.cards.cart-info')
                </div>
                <!--end row-->
            </div>
        </div>
    </section>
    <!--end shop cart-->
@endsection
@section('extra-js')

@endsection

                    {{-- // $(this).closest('.render-address').append('@include('tours.partials.pricingExtra')'); --}}

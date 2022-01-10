@extends('layouts.admin')
@section('title')
Site Info
@endsection
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">eCommerce</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Site Info</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-light">Settings</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                    href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Site Info</h5>
        <hr />
        <div class="form-body mt-4">
            <div class="row">
                <div class="col-lg">
                    <form action="{{ route('admin.site-info.store') }}" method="post">
                        @csrf
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <x-admin.forms.input-text type="email" name="email" placeholder="Enter valid Email Address" value="{{ $site_info->email ?? old('email') }}">Email</x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="phone" placeholder="Enter valid Phone Number" value="{{ $site_info->phone ?? old('phone') }}">Phone</x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="whatsapp" placeholder="Enter Whatsapp Number" value="{{ $site_info->whatsapp ?? old('whatsapp') }}"> Whatsapp Number <i class="lni lni-whatsapp"></i></x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                {{-- @dd($errors->messages) --}}
                                <x-admin.forms.input-text type="text" name="title_en" placeholder="Enter Title in English" required value="{{ $site_info->title_en ?? old('title_en') }}">Title (en)</x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="title_ar" placeholder="Enter Title in Arabic" required value="{{ $site_info->title_ar ?? old('title_ar') }}">Title (ar)</x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.input-text type="text" name="facebook" placeholder="Enter Facebook Link" value="{{ $site_info->facebook ?? old('facebook') }}"> Facebook Link <i class="lni lni-facebook-filled"></i></x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="twitter" placeholder="Enter Twitter Link" value="{{ $site_info->twitter ?? old('twitter') }}"> Twitter Link <i class="lni lni-twitter-filled"></i></x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.input-text type="text" name="linkedin" placeholder="Enter LinkedIn Link" value="{{ $site_info->linkedin ?? old('linkedin') }}"> LinkedIn Link <i class="lni lni-linkedin"></i></x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="location" placeholder="Enter location in Google Map" value="{{ $site_info->location ?? old('location') }}"> Google-map Link <i class="lni lni-map-marker"></i></x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.input-text type="text" name="address" placeholder="Enter Address" value="{{ $site_info->address ?? old('address') }}"> Address <i class="lni lni-map-marker"></i></x-admin.forms.input-text>
                                <x-admin.forms.input-text type="text" name="working_days" placeholder="Enter Working Days" value="{{ $site_info->working_days ?? old('working_days') }}"> Working Days <i class="lni lni-map-marker"></i></x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.textarea name="description_en" placeholder="Enter Description  in English" value="{{ $site_info->description_en ?? old('description_en') }}"> Description (en) </x-admin.forms.textarea>
                                <x-admin.forms.textarea name="description_ar" placeholder="Enter Description  in Arabic" value="{{ $site_info->description_ar ?? old('description_ar') }}"> Description (ar) </x-admin.forms.textarea>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-light">{{ isset($site_info) ? 'Update' : 'Add' }}</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
@endsection
@section('extra-js')
@include('admin.includes.product.category-check')
@endsection

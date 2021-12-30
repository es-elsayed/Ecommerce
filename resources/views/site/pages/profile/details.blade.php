@extends('site.pages.profile.layout')
@section('profile-content')
<div class="card-body">
    <form action="{{ route('site.profile.update',auth()->user()->id) }}" method="POST" class="row g-3" id="form">
        @csrf
        @method('put')
        <div class="col-md-6">
            <label class="form-label">{{ __('content.first name') }}</label>
            <input type="text" name="f_name" class="form-control" value="{{ auth()->user()->f_name }}">
        </div>
        @error('f_name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-md-6">
            <label class="form-label">{{ __('content.last name') }}</label>
            <input type="text" name="l_name" class="form-control" value="{{ auth()->user()->l_name }}">
        </div>
        @error('l_name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <label class="form-label">{{ __('content.email') }}</label>
            <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}">
        </div>
        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <label class="form-label">{{ __('content.phone number') }}</label>
            <input type="tel" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
        </div>
        @error('phone')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <label class="form-label">{{ __('content.password') }}</label>
            <input type="password" name="password"  id="password" class="form-control" value="" autocomplete="off" autofill="off">
        </div>
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <label class="form-label">{{ __('content.change password') }}</label>
            <input type="password" name="new_password" id="new_password" class="form-control" autocomplete="off"
                autofill="off">
        </div>
        <div class="col-12">
            <label class="form-label">{{ __('content.confirm new password') }}</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" autocomplete="off"
                autofill="off">
        </div>
        <span id="message"></span>
        @error('new_password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-light btn-ecomm">{{ __('content.save changes') }}</button>
        </div>
    </form>
</div>
@endsection
@section('extra-js')
{{-- <script>
    $('#new_password, #confirm_password').on('keyup', function () {
        if ($('#new_password').val() == $('#confirm_password').val()) {
            $('#message').html('Password Matching').css('color', 'green');
    } else
        $('#message').html('Password not Matching').css('color', 'red');
    });
    $('#form').submit(function(e){
        if ($('#new_password').val() !== $('#confirm_password').val() || $('#password').val() == "") {
        e.preventDefault();
    }
    })

</script> --}}
@endsection

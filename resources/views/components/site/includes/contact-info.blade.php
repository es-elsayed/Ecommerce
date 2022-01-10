@if (getInfo('address'))
<div class="address mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.address') }} </p>
    <p class="mb-0 font-12">{{ getInfo('address') }}</p>
</div>
@endif
@if (getInfo('phone'))
<div class="phone mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.phone') }} </p>
    <p class="mb-0 font-13">{{ getInfo('phone') }}</p>
</div>
@endif
@if (getInfo('email'))
<div class="email mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.email') }} </p>
    <p class="mb-0 font-13">{{ getInfo('email') }}</p>
</div>
@endif
@if (getInfo('working_days'))
<div class="working-days mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.working days') }} </p>
    <p class="mb-0 font-13">{{ getInfo('working_days') }}</p>
</div>
@endif

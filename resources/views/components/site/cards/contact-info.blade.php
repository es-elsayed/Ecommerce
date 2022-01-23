@if (isset($siteInfo->address))
<div class="address mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.address') }} </p>
    <p class="mb-0 font-12">{{ $siteInfo->address }}</p>
</div>
@endif
@if (isset($siteInfo->phone))
<div class="phone mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.phone') }} </p>
    <p class="mb-0 font-13">{{ $siteInfo->phone }}</p>
</div>
@endif
@if (isset($siteInfo->email))
<div class="email mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.email') }} </p>
    <p class="mb-0 font-13">{{ $siteInfo->email }}</p>
</div>
@endif
@if (isset($siteInfo->working_days))
<div class="working-days mb-3">
    <p class="mb-0 text-uppercase text-white"> {{ __('content.working days') }} </p>
    <p class="mb-0 font-13">{{ $siteInfo->working_days }}</p>
</div>
@endif

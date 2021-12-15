<div class="card-body">
    <div class="d-flex align-items-center">
        <div class="">
            <img src="{{ auth()->user()->image }}" width="90" alt="" class="rounded-circle p-1 border">
        </div>
        <div class="ms-2">
            <h6 class="mb-2">{{ auth()->user()->f_name.' '.auth()->user()->l_name }}</h6>
            <p class="mb-2">{{ auth()->user()->email }}</p>
            <p class="mb-2">{{ auth()->user()->phone }}</p>
        </div>
        <div class="ms-auto">
            <a href="{{ route('site.profile.edit',auth()->user()->id) }}" class="btn btn-light btn-ecomm">
                <i class="bx bx-edit"></i> Edit Profile</a>
        </div>
    </div>
</div>

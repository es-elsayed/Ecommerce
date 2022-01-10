@props(['title','active'])
<section class="py-3 border-bottom d-none d-md-flex">
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center">
            <h3 class="breadcrumb-title pe-3">{{ $title }}</h3>
            <div class="ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        {{ $slot }}
                        <li class="breadcrumb-item active" aria-current="page">{{ $active ?? $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

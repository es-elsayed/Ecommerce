<x-site.layout title="{{ __('content.contact') }}">

    <!--start breadcrumb-->
    <x-site.includes.headers.breadcrumb title="{{ __('content.contact') }}">
        <li class="breadcrumb-item">
            <a href="{{ route('site.home.index') }}">
                <i class="bx bx-home-alt"></i>
                {{ __('content.home') }}
            </a>
        </li>
    </x-site.includes.headers.breadcrumb>
    <!--end breadcrumb-->
    <!--start page content-->
    <section class="py-4">
        <div class="container">
            <h3 class="d-none">Google Map</h3>
            <div class="contact-map p-3 bg-dark-1 rounded-0 shadow-none">
                <iframe src="{{ getInfo('location') }}" class="w-100" height="450" style="border:0;" allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="p-3 bg-dark-1">
                        <form action="{{ route('site.contact.store') }}" method="post" class="form-body">
                            @csrf
                            <h6 class="mb-0 text-uppercase">{{ __('content.contact us') }}</h6>
                            <div class="my-3 border-bottom"></div>
                            <div class="row">
                                <x-admin.forms.input-text name="name" type="text">
                                    {{ __('content.enter')." ".__('content.your name') }}
                                </x-admin.forms.input-text>
                                <x-admin.forms.input-text name="email" type="email">
                                    {{ __('content.enter')." ".__('content.email') }}
                                </x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.input-text name="phone" type="text">
                                    {{ __('content.enter')." ".__('content.phone number') }}
                                </x-admin.forms.input-text>
                            </div>
                            <div class="row">
                                <x-admin.forms.textarea name="message" rows="8">{{ __('content.message') }}
                                </x-admin.forms.textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-light btn-ecomm">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="p-3 bg-dark-1">
                        <x-site.includes.contact-info />
                    </div>
                </div> --}}
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end start page content-->
    </div>
</x-site.layout>
@php
    $socialLinks = App\Models\SocialLink::where('status', 1)->orderBy('id', 'DESC')->get();
    $footerGridOne = App\Models\FooterGridOne::first();
    $footerGridTwo = App\Models\FooterGridTwo::where('status', 1)->orderBy('priority_number', 'asc')->get();
    $footerGridThree = App\Models\FooterGridThree::where('status', 1)->orderBy('priority_number', 'asc')->get();
@endphp
<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ @$footerGridOne->address }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ @$footerGridOne->phone }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ @$footerGridOne->email }}</p>
                <div class="d-flex pt-2">
                    @foreach ($socialLinks as $socialLink)
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                            href="{{ $socialLink->link }}"><i class="{{ $socialLink->icon }}"></i></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Services</h5>
                @foreach ($footerGridTwo as $footerGridTwoItem)
                    <a class="btn btn-link" href="{{ $footerGridTwoItem->url }}">{{ $footerGridTwoItem->name }}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                @foreach ($footerGridThree as $footerGridThreeItem)
                    <a class="btn btn-link" href="{{ $footerGridThreeItem->url }}">{{ $footerGridThreeItem->name }}</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                {{-- <div class="position-relative w-100">
                    <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div> --}}
            </div>
        </div>
    </div>
</div>

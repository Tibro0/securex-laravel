<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-5">Why Choose Us</h1>
                    <p class="mb-4 pb-2">{{ @$allDescription['why_choose_us_description'] }}</p>
                    <div class="row g-4">
                        @foreach ($whyChooseUsIconBoxes as $whyChooseUsIconBox)
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{ asset($whyChooseUsIconBox->image) }}"
                                            alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">{{ $whyChooseUsIconBox->name }}</p>
                                        <h5 class="mb-0">{{ $whyChooseUsIconBox->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/feature.jpg') }}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

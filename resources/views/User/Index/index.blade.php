@extends('User.Main.mainLayout')
@section('title', 'Home | Dotcsa')
@section('content')
    <section class="home_three_banner">
        <div class="home_three_slider_wrapper owl-theme owl-carousel">
            @if (isset($banner1->image) && !empty($banner1->image) && File::exists(public_path('storage/CmsImage/' . $banner1->image)))
                <div class="home_three_slider_item"
                    style="background-image:url({{ asset('storage/CmsImage/' . $banner1->image) }})">
                @else
                    <div class="home_three_slider_item"
                        style="background-image:url(User/assets/img/home-3/banner/banner-1.png)">
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="home_three_banner_text">

                            <h5>{{ $banner1->title }}</h5>
                            <ul class="slidepoints mb-4">
                                <?php echo html_entity_decode($banner1->description); ?>

                            </ul>


                            <a class="btn btn-theme" href="#">Contact DOTCSA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($banner2->image) &&
                !empty($banner2->image) &&
                File::exists(public_path('storage/CmsImage/' . $banner2->image)))
            <div class="home_three_slider_item"
                style="background-image:url({{ asset('storage/CmsImage/' . $banner2->image) }})">
            @else
                <div class="home_three_slider_item"
                    style="background-image:url(User/assets/img/home-3/banner/banner-2.png)">
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="home_three_banner_text">
                        <h5>{{ $banner2->title }}</h5>
                        <ul class="slidepoints mb-4">
                            <?php echo html_entity_decode($banner2->description); ?>

                        </ul>


                        <a class="btn btn-theme" href="#">Contact DOTCSA</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- About Area -->
    <section class="about_area_three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="home_three_about_img">
                        @if (isset($secondPortion->image) && !empty($secondPortion->image) && File::exists(public_path('storage/CmsImage/' . $secondPortion->image)))
                        <img src="{{ asset('storage/CmsImage/'. $secondPortion->image) }}" alt="img">
                        @else
                        <img src="{{ asset('User/assets/img/about.png') }}" alt="img">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home_three_about_text_wrapper">
                        <div class="about_three_middel_cntent">
                            <h2>{{ $secondPortion->title }}</h2>
                            <h4 class="mt-3 text-warning">{{ $secondPortion->short_desc }}</h4>
                            {{-- <p>
                                It's 2023, DOT Consulting has largely been about Reading a DoT
                                Book. <br>
                                DOTCSA Knows DoT Compliance is BEYOND goes beyond a
                                Regulation Book, our unique Training Models will show you what
                                DOT Consultants know and beyond through continuing education
                            </p>
                            <p>
                                We review your DOT registered data, conduct in depth surveys an
                                ask the right questions to tailor a Custom Approach to applying th
                                FMCSRs and Safety Mananagement Policies for Risk Reduction fo
                                a potential to reduce your insurance Liabilities.
                                Ask us about our work Partnering with Insurance Brokers to help
                                you reduce your Insurance costs
                            </p> --}}
                   
                            <?php echo html_entity_decode($secondPortion->description); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area -->

    <!-- Services Area Start -->
    <section class="service_three_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_heading_three_center">
                        <h2>{{ $thirdPortion->title }}</h2>
                        <h5 class="mt-4">{{ $thirdPortion->short_desc }}</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service_three_wrapper_item">
                        <div class="service_three_item_img">
                            <a href="service-details.html"><img src="{{ asset('User/assets/img/banner1.png') }}"
                                    alt="img">
                            </a>
                        </div>
                        <div class="service_three_item_text">
                            <h3>DOT Drug & Alcohol Testing that MEETS DOTCSA Standards</h3>
                            <p>Most State & Federal DOT Investigators can tell you DOT Drug & Alcohol testing violations are
                                the most common found, resulting in thousands in penalties.</p>
                            <a href="service-details.html">Learn more...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service_three_wrapper_item">
                        <div class="service_three_item_img">
                            <a href="service-details.html"><img src="{{ asset('User/assets/img/banner2.png') }}"
                                    alt="img">
                            </a>
                        </div>
                        <div class="service_three_item_text">
                            <h3>MOCK DOT Investigations & Audits by Former Government Investigators</h3>
                            <p>Comprehensive 49 CFR Mock DOT Investigations covering every Federal Motor Carrier Safety
                                Regulation & Hazardous Material Regulation... </p>
                            <a href="service-details.html">Learn more...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service_three_wrapper_item">
                        <div class="service_three_item_img">
                            <a href="service-details.html"><img src="{{ asset('User/assets/img/banner3.png') }}"
                                    alt="img">
                            </a>
                        </div>
                        <div class="service_three_item_text">
                            <h3>Partial or FULL DOT Program Compliance Records Management</h3>
                            <p>Why worry about keeping DOT Compliant Paperwork?</p>
                            <p>You Drive & Run Your Business, DOTCSA Accredited Providers manage... </p>
                            <a href="service-details.html">Learn more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Ares Start -->
    <section class="home_three_why_choose">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="why_choose_left text-center">
                        <h5>There's NO such thing as DOT Certified Training, stop wasting your $.</h5>
                        <h2 class="text-warning mt-2">ES&H Insurance Industry Safety Professionals Know Risk Management When
                            They See It.</h2>
                        <div class="why_choose_item_wrapper">
                            <p class=" text-white">DOTCSA Training provides Association Registered Accreditation through
                                periodic bi-annual training programs that provides your clients with confidence in your ES&H
                                role. </p>
                        </div>
                        <a href="#" class="btn btn-success mt-4"><i class="fab fa-whatsapp"></i> Message us on
                            WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Ares End -->

    <!-- Testimonials Area Start -->
    <section class="our_testimonials_area_three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_heading_three_center">
                        <h5>Testimonials</h5>
                        <h2>Here Are Some Feedback From Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="test_three_slider owl-carousel owl-theme">
                        <div class="testimonial_three_boxed">
                            <img src="{{ asset('User/assets/img/home-3/common/quate.png') }}" alt="icon"
                                class="test_quate_area">
                            <img src="{{ asset('User/assets/img/home-3/common/test-1.png') }}" alt="img">
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip aliqua nostrud ipsum. Esse et conseq
                                dolor
                                anim esse dolore. Voluptate consectetur consectetur veniam ad aliqua.</p>
                            <div class="test_three_bottom">
                                <div class="test_three_bottom_left">
                                    <h3>David connley</h3>
                                    <h6>General Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_three_boxed">
                            <img src="{{ asset('User/assets/img/home-3/common/quate.png') }}" alt="icon"
                                class="test_quate_area">
                            <img src="{{ asset('User/assets/img/home-3/common/test-2.png') }}" alt="img">
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip aliqua nostrud ipsum. Esse et conseq
                                dolor
                                anim esse dolore. Voluptate consectetur consectetur veniam ad aliqua.</p>
                            <div class="test_three_bottom">
                                <div class="test_three_bottom_left">
                                    <h3>David connley</h3>
                                    <h6>General Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_three_boxed">
                            <img src="{{ asset('User/assets/img/home-3/common/quate.png') }}" alt="icon"
                                class="test_quate_area">
                            <img src="{{ asset('User/assets/img/home-3/common/test-3.png') }}" alt="img">
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip aliqua nostrud ipsum. Esse et conseq
                                dolor
                                anim esse dolore. Voluptate consectetur consectetur veniam ad aliqua.</p>
                            <div class="test_three_bottom">
                                <div class="test_three_bottom_left">
                                    <h3>David connley</h3>
                                    <h6>General Manager</h6>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_three_boxed">
                            <img src="{{ asset('User/assets/img/home-3/common/quate.png') }}" alt="icon"
                                class="test_quate_area">
                            <img src="{{ asset('User/assets/img/home-3/common/test-1.png') }}" alt="img">
                            <p>Commodo aliqua minim id do aute aliquip ex aliquip aliqua nostrud ipsum. Esse et conseq
                                dolor
                                anim esse dolore. Voluptate consectetur consectetur veniam ad aliqua.</p>
                            <div class="test_three_bottom">
                                <div class="test_three_bottom_left">
                                    <h3>David connley</h3>
                                    <h6>General Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

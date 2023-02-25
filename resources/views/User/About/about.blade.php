@extends('User.Main.mainLayout')
@section('title', 'About-us | Dotcsa')
@section('content')

<section id="inner_area_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_text">
                    <h2>About</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>&gt;</li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">DOTCSA HAS DECADES OF EXPERIENCE IN GOVERNMENT & INDUSTRY</h3>
        <hr>
        <div class="text-center mb-4">
            <h3 class="mb-3">REAL EXPERIENCE MATTERS</h3>
            <p>Most "DOT Consultants" can point you to a regulation, that's it. That approach never works.</p>
            <p>We Train You on Developing DOT Regulations into a Risk Reduction Safety Program modeled after DOT Interventions & Safety Data for Safety Fitness Determination, the way it should be!</p>
        </div>
        <div class="service_wrapper_top pt-2">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="service-card shadow pt-4 h-100 mb-0">
                        <img src="{{ asset('User/assets/img/police.jpg') }}">
                        <div class="service-caption">
                            <h3>Former Law Enforcement with DOT Transportation Safety & Crash Investigator Experience</h3>
                            <p class="mb-0">Two of our Member Founders Were Former Law Enforcement</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card shadow pt-4 h-100 mb-0">
                        <img src="{{ asset('User/assets/img/usa-transport.png') }}">
                        <div class="service-caption">
                            <h3>Former USDOT Investigators & State Director</h3>
                            <p class="mb-0">Three of our Founders served our nation as former USDOT (OMC) FMCSA Investigators & an Assistant State Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card shadow pt-4 h-100 mb-0">
                        <img src="{{ asset('User/assets/img/trucklist.png') }}">
                        <div class="service-caption">
                            <h3>Former Private Industry Freight & Safety Regulatory Pros.</h3>
                            <p class="mb-0">GOVERNMENT Never Knows It All. Most Importantly, DOTCSA has three Founders with experience in Director & Executive Management Level Positions within Big Trucking, many who worked their way up to the Top. Yes, they wore your shoes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="service-card shadow pt-4 h-100 mb-0">
                        <img src="{{ asset('User/assets/img/usa-pride.png') }}">
                        <div class="service-caption">
                            <h3>Former Non-DOT Government & Federal Contractors Managing DOT Compliance</h3>
                            <p class="mb-0">Even other Federal Agencies such as EPA, NASA, DOD, DOE and Government Research Labs can be responsible for the DOT Compliance of Hazardous Materials & Government Property.</p>
                            <p>Three of our Founders held former high-level positions within Government Agencies or as Federal Contractors ensuring DOT Compliance on our Nation's Roadways. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="service-card shadow pt-4 h-100 mb-0">
                        <img src="{{ asset('User/assets/img/professionals.png') }}">
                        <div class="service-caption">
                            <h3>REAL DOT Professionals, with former REAL EXPERIENCE in Law Enforcement and DOT Government Compliance Programs & Services</h3>
                            <p class="mb-0">DOTCSA's core Founding Members originally met in 2005 as Law Enforcement, DOT Government Investigators, & DOT Compliance Safety Program Provider Professionals who back then realized the Motor Carrier industry lacked a real understanding that DOT Safety Compliance goes beyond "reading a regulation" & being "consulted'. </p>
                            <p>From 2005 onward into 2022, this core friendship of DOT Safety Professionals came to the realization that Training to an Industry Standard of 49 CFR Safety Fitness Determination modeled after State & Federal DOT Inspections, Audits and Investigations was the answer.</p>
                            <p>In 2013 onward 2022, after losing two members of our growing group of DOT Safety Professionals, businessman & proprietor Sid Martinez (pictured above in uniform) a former San Antonio PD Detective & Accident Investigator) put pen to paper & DOTCSA was established.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
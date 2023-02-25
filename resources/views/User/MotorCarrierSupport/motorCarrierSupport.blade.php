@extends('User.Main.mainLayout')
@section('title', 'MOTOR CARRIER SUPPORT | Dotcsa')
@section('content')
<section id="inner_area_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_text">
                    <h2>MOTOR CARRIER SUPPORT</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>&gt;</li>
                        <li class="active">MOTOR CARRIER SUPPORT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">DOTCSA HAS ACCESS TO DOT SAFETY PROS MEETING OUR STANDARDS</h3>
        <hr>
        <div class="text-center mb-4">
            <h3 class="mb-3">DOTCSA Accredited DOT Safety Compliance Service Providers Can Help.</h3>
        </div>
        <div class="service_wrapper_top pt-2">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner1.png') }}">
                        <div class="service-caption text-start">
                            <h3>DOT Drug & Alcohol Testing that MEETS DOTCSA Standards</h3>
                            <p>Most State & Federal DOT Investigators can tell you DOT Drug & Alcohol testing violations are the most common found, resulting in thousands in penalties.</p>
                            <p>Using a Clinic or Hospital for DOT Drug & Alcohol Compliance? Is your Healthcare source READY to help you handle a DOT Investigation on your behalf? Not Really.</p>
                            <p>DOTCSA Accredited a National Provider Third Party Agent DOT Drug & Alcohol testing firm founded by a former USDOT FMCSA State Administrator. YOUR PROBLEMS STOP HERE.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner2.png') }}">
                        <div class="service-caption text-start">
                            <h3>MOCK DOT Investigations & Audits by Former Government Investigators</h3>
                            <p>Comprehensive 49 CFR Mock DOT Investigations covering every Federal Motor Carrier Safety Regulation & Hazardous Material Regulation using established State & Federal DOT Investigations methods.</p>
                            <p>DOTCSA has Accredited subject matter experts with former experiences as DOT State & Federal Investigators and with past experiences in other Government Agencies responsible for 49 CFR DOT regulatory compliance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner3.png') }}">
                        <div class="service-caption text-start">
                            <h3>Partial or FULL DOT Program Compliance Records Management</h3>
                            <p>Why worry about keeping DOT Compliant Paperwork?</p>
                            <p>You Drive & Run Your Business, DOTCSA Accredited Providers manage your DOT files. </p>
                            <p>DOTCSA can refer you to DOT Compliance Providers that have managed fleets for large trucking companies. </p>
                            <p>We can also refer you to DOT Safety Pros. who have former positions as State & Federal DOT Investigators for Program Guidance in Compliant Record Keeping.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-center fw-bold mt-4 text-uppercase">Other DOT areas our vetted sources can support you</h3>
        <hr>
        <div class="service_wrapper_top pt-2">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner4.png') }}">
                        <div class="service-caption text-start">
                            <h3>DOT Inspection & Maintenance Record Program</h3>
                            <p>Our vetted sources have former DOT State & Federal backgrounds with decades of experience in conducting DOT Inspections & Investigations. </p>
                            <p>We also have sources with former careers in maintenance for DOD Military and Large Trucking companies who know their tools by getting their hands dirty to keep their work DOT Compliant .</p>
                            <p>Our Providers can Train Mechanics, Drivers, Motor Carriers in all DOT Compliance areas for Load Securement, Driver Inspections, & Federal Maintenance DOT FMVSS Standards. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner5.png') }}">
                        <div class="service-caption text-start">
                            <h3>Driver Qualification</h3>
                            <p>If you are a Motor Carrier, Hiring Agent, Safety Professional, or in HR you know better than ANYONE the complexity of onboarding and QUALIFYING any CDL or Non-CDL Driver.</p>
                            <p>DOTCSA Accredited Providers can help you with regulatory Driver Qualification based on their former experiences in State or Federal DOT Agencies.</p>
                            <p>Better yet, our sources can help you with your BOTTOM LINE by helping you with EVERYTHING about the hiring & Qualification Process. </p>
                            <p>You Focus On Your Business making $.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="service-card shadow h-100 mb-0">
                        <img src="{{ asset('User/assets/img/banner6.png') }}">
                        <div class="service-caption text-start">
                            <h3>DOTCSA Accredits Training For DOT Safety & Compliance Beyond Regulations</h3>
                            <p>DOTCSA's primary mission is training Safety Professionals to manage their DOT Safety Programs with precision methods used by Government Regulators.</p>
                            <p>DOTCSA has Accredited Training & Service Providers with actual Government & Private Industry experience in areas like Load Securement, Hazardous Materials Record Management, HM Transport & Handling, Custom Business Fleet Safety Policies, Better Navigating FMCSA's Safety Measurement System, & helping with FMCSA Rating Upgrades & Corrective Action req</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
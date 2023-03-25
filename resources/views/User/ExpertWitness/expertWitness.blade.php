@extends('User.Main.mainLayout')
@section('title', 'EXPERT WITNESS | Dotcsa')
@section('content')
<section id="inner_area_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_text">
                    <h2>EXPERT WITNESS</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>&gt;</li>
                        <li class="active">EXPERT WITNESS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <h4 class=" text-center mb-4">Our Former Govermment & Private Industry Founder & Members Subject Matter Expertise</h4>
                    <p>We Can Provide Professionally Completed DOT Redulatory Reports Based on Former Federal and State DOT Investigations & Situations You Need Support in Such:</p>
                    <p>Human Resources Employee Management <br>
                    Indepent Post Accident Investigations <br>
                Focused DOT Mock Audits & Investigations Targeting Program in Your Company for Quality Control <br>
            We Can Work With Our Former Law Enforcement Founder Members for Accident Reconstruntion and Crash Investigations</p>
                    <a href="mailto:safety@dotcsa.com" class="btn btn-theme text-uppercase text-dark mt-2">Find out more</a>
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection
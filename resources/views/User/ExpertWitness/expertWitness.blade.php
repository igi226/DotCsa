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
                    <h4 class=" text-center mb-4">Our Founding Members Have Subject Matter Expertise</h4>
                    <p>DOTCSA has founding members with specialized technical and transportation industry knowledge who can "assist the trier of fact,". </p>
                    <p>DOTCSA can confidently admit our Founders do not "Knot It All". We can direct you to other Association Members & Vetted Providers with a larger variety of subject matter expertise in the transportation industry.</p>
                    <a href="mailto:safety@dotcsa.com" class="btn btn-theme text-uppercase text-dark mt-2">Find out more</a>
                </div>
            </div>
        </div>
    </div>  
</section>
@endsection
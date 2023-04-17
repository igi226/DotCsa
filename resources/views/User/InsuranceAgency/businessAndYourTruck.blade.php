@extends('User.Main.mainLayout')
@section('title', 'INSURANCE AGENCIES | Dotcsa')
@section('content')
<section id="inner_area_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_text">
                    <h2>INSURANCE AGENCIES</h2>
                    <ul>
                        <li><a href="javascript:void(0)"> Insurance DOT Training & Policy Coverage</a></li>
                        <li>&gt;</li>
                        <li class="active">P&C Insurance Policy Sales for your business and your truck</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">DOTCSA HAS EXPERIENCE WORKING THE INSURANCE INDUSTRY</h3>
        <hr>
        <div class="row justify-content-center">
            {{-- <div class="col-lg-9">
                <h5 class="text-center text-dark" style="line-height: 1.5;">We train ES&H and OSHA Safety Professionals to manage DOT Programs</h5>
                   
            </div> --}}
            <div class="col-lg-6">
                <div class="contact_form_main mt-5 mb-5">
                    <img src="{{ asset('User\assets\img\Types of insurance 11.jpg') }}" alt="">
                </div>
               
            </div>
            <div class="col-lg-6">
                <div class="contact_form_main mt-5 mb-5">
                    <form action="#!">
                        <div class="row">
                          <div class="col-lg-12">
                           <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                           </div>
                          </div>
                          <div class="col-lg-12">
                           <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                           </div>
                          </div>
                          <div class="col-lg-12">
                           <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Type Your Messages"></textarea>
                           </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                             <input type="file" name="" class="form-control">
                            </div>
                           </div>
                          <div class="col-lg-12">
                           <div class="contact_form_submit">
                            <button class="btn btn-theme text-dark text-uppercase">Send</button>
                           </div>
                          </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="text-center">
                <h4 class="h5 text-center mb-4">There's NO such thing as DOT Certified Training, stop wasting your $.</h4>
                <p>ES&H Insurance Industry Safety Professionals Know Risk Management When They See It.</p>
                <p>DOTCSA Training provides Association Registered Accreditation through periodic bi-annual training programs that provides your clients with confidence in your ES&H role. </p>
                <a href="#" class="btn btn-success mt-2"><i class="fab fa-whatsapp"></i> Message us on WhatsApp</a>
            </div>
        </div>
    </div>  
</section>
@endsection
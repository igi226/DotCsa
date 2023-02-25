@extends('User.Main.mainLayout')
@section('title', 'Field Training Event | Dotcsa')
@section('content')
<section id="inner_area_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_text">
                    <h2>FIELD TRAINING EVENTS</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>&gt;</li>
                        <li class="active">FIELD TRAINING EVENTS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h3 class="text-center fw-bold">DOTCSA IS CURRENTLY PLANNING NATIONWIDE TRAINING SESSIONS</h3>
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h5 class="text-center text-dark" style="line-height: 1.5;">Drop us a line! Let us know where you think we can plan a Training Event, or perhaps your company is considering custom training to fit your own unique business model. We don't make Sales Calls or Try to get you to buy something, So feel free to chat.</h5>
            </div>
            <div class="col-lg-8">
                <div class="contact_form_main mt-5">
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
                            <input type="text" class="form-control" placeholder="Subject">
                           </div>
                          </div>
                          <div class="col-lg-12">
                           <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Type Your Messages"></textarea>
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
        </div>
    </div>  
</section>
@endsection
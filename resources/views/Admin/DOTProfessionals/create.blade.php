@extends('Admin.Main.mainLayout')
@section('title', 'DOT professional request | DOTCSA')
@section('content')
    <div class="form-elements-wrapper">
        <form action="{{ route('dot-professionals.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-style mb-30">

                <h6 class="mb-25">Create DOT Professional</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-style-1">
                            <label> Name <span class="text-danger">*</span></label>
                            <input type="text" placeholder="Name" name="name" required />
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                        </div>
                        <div class="input-style-1">
                            <label>Address <span class="text-danger">*</span></label>

                            <input type="text" placeholder="Address" name="address" required />
                            @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif

                        </div>

                        <div class="input-style-1">
                            <label>Email <span class="text-danger">*</span></label>

                            <input type="email" placeholder="Email" name="email" required />
                            @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                        </div>

                        <div class="input-style-1">
                            <label>State <span class="text-danger">*</span></label>

                            <input type="text" placeholder="State" name="state" required />
                            @if ($errors->has('state'))
                            <span class="text-danger">{{ $errors->first('state') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="input-style-1">
                            <label>Contact Number <span class="text-danger">*</span></label>

                            <input type="number" placeholder="Contect number" name="contact_number" required />
                            @if ($errors->has('contact_number'))
                                        <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                    @endif

                        </div>

                        <div class="input-style-1">
                            <label>City <span class="text-danger">*</span></label>

                            <input type="text" placeholder="City" name="city" required />
                            @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                        </div>

                        <div class="input-style-1">
                            <label>Document , if any (optional) :</label>

                            <input type="file" name="profile_doc" class="form-control" />
                            @if ($errors->has('profile_doc'))
                                        <span class="text-danger">{{ $errors->first('profile_doc') }}</span>
                                    @endif

                        </div>

                        <div class="input-style-1">
                            <label>Zipcode <span class="text-danger">*</span></label>

                            <input type="number" placeholder="zipcode" name="zipcode" required />
                            @if ($errors->has('zipcode'))
                            <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-12 text-end">
                        <button type="submit" class="btn-sm btn-primary">Create</button>

                    </div>
                    
                </div>
             
           
            </div>
            
        </form>
    </div>
    </div>
@endsection

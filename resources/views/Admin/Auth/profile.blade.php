@extends('Admin.Main.mainLayout')
@section('title', 'Dashboard | DOTCSA')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row mt-4">

            <div class="col-lg-6 mr-2">
                <form action="{{ route('admin.profileUpdate') }}" method="post">
                    @csrf
                    <div class="card-style mb-30">
                        <h6 class="mb-25">Update Profile</h6>
                        @if (Session::has('msg1'))
                            <p class="alert alert-info">{{ Session::get('msg1') }}</p>
                        @endif
                        <div class="input-style-1">
                            <label> Name</label>
                            <input type="text" placeholder="Enter Name" name="name" value="{{ auth()->guard('admin')->user()->name }}"/>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif

                        </div>

                        <div class="input-style-1">
                            <label> Email</label>
                            <input type="emial" placeholder="Enter Email" name="email" value="{{ auth()->guard('admin')->user()->email }}" />
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        </div>

                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </form>

            </div>

            <div class="col-lg-5 mr-2">
                <form action="{{ route('admin.passwordUpdate') }}" method="post">
                    @csrf
                    <div class="card-style mb-30">
                        <h6 class="mb-25">Update Password</h6>
                        @if (Session::has('msg2'))
                            <p class="alert alert-info">{{ Session::get('msg2') }}</p>
                        @endif
                        <div class="input-style-1">
                            <label> Old Password</label>
                            <input type="password" name="current_password" />
                            @if ($errors->has('current_password'))
                            <span class="text-danger">{{ $errors->first('current_password') }}</span>
                        @endif
                        </div>

                        <div class="input-style-1">
                            <label> New Password</label>
                            <input type="password" name="password" />
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        </div>

                        <div class="input-style-1">
                            <label> Confirm Password</label>
                            <input type="password" name="confirm_password" />
                            @if ($errors->has('confirm_password'))
                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                        @endif
                        </div>

                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </form>

            </div>
        </div>
    </div>
@endsection

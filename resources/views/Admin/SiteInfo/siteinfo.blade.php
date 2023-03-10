@extends('Admin.Main.mainLayout')
@section('title', 'Site-Informations | DOTCSA')
@section('content')
    <div class="form-elements-wrapper">
        <form action="{{ route('site.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-style mb-30">

                <h6 class="mb-25">Update Site Informations</h6>
                @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-style-1">
                            <label>Site Name <span class="text-danger">*</span></label>
                            <input type="text" name="site_name" value="{{ $site_info->site_name }}" />
                            @if ($errors->has('site_name'))
                                <span class="text-danger">{{ $errors->first('site_name') }}</span>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Current Site Logo:</label>
                           <img src="{{ asset('storage/SiteImage/'. $site_info->logo_image) }}" height="86px" width="272px" alt="">
                        </div>

                        <div class="input-style-1">
                            <label>Update Site Logo:</label>
                            <input type="file" name="logo_image" class="form-control" />
                            @if ($errors->has('logo_image'))
                                <span class="text-danger">{{ $errors->first('logo_image') }}</span>
                            @endif
                        </div>

                        <div class="input-style-1">
                            <label>Current Site Favicon:</label>
                           <img src="{{ asset('storage/SiteImage/'. $site_info->favicon_image) }}" height="60px" width="78px" alt="">
                        </div>

                        <div class="input-style-1">
                            <label>Update Site Favicon:</label>
                            <input type="file" name="favicon_image" class="form-control" />
                            @if ($errors->has('favicon_image'))
                                <span class="text-danger">{{ $errors->first('favicon_image') }}</span>
                            @endif
                        </div>
                        {{-- <div class="input-style-1">
                            <label>Address <span class="text-danger">*</span></label>

                            <input type="text" name="address" value="{{ $site_info->address }}" />
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif

                        </div> --}}

                        <div class="input-style-1">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" value="{{ $site_info->email }}" />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label>Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="{{ $site_info->phone }}" />
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="input-style-1">
                            <label>Twitter <span class="text-danger">*</span></label>
                            <input type="text" name="twitter" value="{{ $site_info->twitter }}" />
                            @if ($errors->has('twitter'))
                                <span class="text-danger">{{ $errors->first('twitter') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label>Facebook <span class="text-danger">*</span></label>
                            <input type="text" name="facebook" value="{{ $site_info->facebook }}" />
                            @if ($errors->has('facebook'))
                                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                            @endif

                        </div>


                        <div class="input-style-1">
                            <label>Instagram <span class="text-danger">*</span></label>
                            <input type="text" name="instagram" value="{{ $site_info->instagram }}" />
                            @if ($errors->has('instagram'))
                                <span class="text-danger">{{ $errors->first('instagram') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label>Pinterest <span class="text-danger">*</span></label>
                            <input type="text" name="pinterest" value="{{ $site_info->pinterest }}" />
                            @if ($errors->has('pinterest'))
                                <span class="text-danger">{{ $errors->first('pinterest') }}</span>
                            @endif

                        </div>

                        
                        <div class="input-style-1">
                            <label>Linkdin <span class="text-danger">*</span></label>
                            <input type="text" name="linkdin" value="{{ $site_info->linkdin }}"/>
                            @if ($errors->has('linkdin'))
                                <span class="text-danger">{{ $errors->first('linkdin') }}</span>
                            @endif

                        </div>

                    </div>
                    <div class="col-lg-12 text-end">
                        <button type="submit" class="btn-sm btn-primary">Update</button>

                    </div>

                </div>


            </div>

        </form>
    </div>
@endsection

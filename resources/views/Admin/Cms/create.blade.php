@extends('Admin.Main.mainLayout')
@section('title', 'Dashboard | DOTCSA')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row mt-4 justify-content-center">

            <div class="col-lg-8 mr-2">
                <form action="{{ route('cms.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-style mb-30">
                        {{-- <h6 class="mb-25">Update Profile</h6> --}}
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="input-style-1">
                            <label> Name</label>
                            <input type="text" placeholder="" name="title" value="{{ old('title') }}" />
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> short desk</label>
                            <input type="text" placeholder="" name="short_desc" value="{{ old('short_desc') }}" />
                            @if ($errors->has('short_desc'))
                                <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> Description</label>
                            {{-- <input type="text" placeholder="" name="" value="{{  }}" /> --}}
                         <textarea name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> image</label>
                            <input type="file" placeholder="" name="image"/>
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif

                        </div>

                        

                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </form>

            </div>
        </div>
    </div>
@endsection

@extends('Admin.Main.mainLayout')
@section('title', 'Edit-Cms | DOTCSA')
@section('content')
    <div class="form-elements-wrapper">
        <div class="row mt-4 justify-content-center">

            <div class="col-lg-10 mr-2">
                <form action="{{ route('cms.update', $the_cms->slug) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-style mb-30">
                        {{-- <h6 class="mb-25">Update Profile</h6> --}}
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <div class="input-style-1">
                            <label> Title</label>
                            <input type="text" placeholder="" name="title" value="{{ $the_cms->title }}" />
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> short desk</label>
                            @if (!empty($the_cms->short_desc))
                            <input type="text" placeholder="" name="short_desc" value="{{ $the_cms->short_desc }}" />
                            @else
                            <input disabled type="text" class="text-danger"  value="{{ "It has no short description, you can skip this." }}" />
                            @endif
                            @if ($errors->has('short_desc'))
                                <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> Description</label>
                            @if (!empty($the_cms->description))
                            <textarea name="description" id="body" cols="30" rows="10">{{ $the_cms->description }}</textarea>
                            @else
                            <textarea class="text-danger" disabled>{{ "This portion has not any description, You can skip this." }}</textarea>
                            @endif
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label>Current Image</label>
                            @if (!empty($the_cms->image))
                                <img src="{{ asset('storage/CmsImage/' . $the_cms->image) }}" height="200px" width="250px"
                                    rel="noopener noreferrer" class="download-icon text-success" />
                            @else
                                <p class="text-danger">No Image</p>
                            @endif

                        </div>

                        <div class="input-style-1">
                            <label> image</label>
                            @if (!empty($the_cms->image))
                            <input type="file"  name="image" />
                            @endif
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
@section('ckeditor')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
</script>   
@endsection

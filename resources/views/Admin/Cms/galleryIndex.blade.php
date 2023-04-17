@extends('Admin.Main.mainLayout')
@section('title', 'Gallery | DOTCSA')
@section('content')
    <section>
        <div class="container">
            <div class="m-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add New
                </button>
                @if (Session::has('msg'))
                    <p class="alert alert-info">{{ Session::get('msg') }}</p>
                @endif
            </div>

            <div class="row m-4" id="gallery-section">
                @foreach ($galleries as $image)
                    {{-- {{  dd($image->gallery_image)}} --}}
                    <div class="col-md-3 mb-4">
                        @if (isset($image->gallery_image) &&
                                !empty($image->gallery_image) &&
                                File::exists(public_path('storage/GalleryImage/' . $image->gallery_image)))
                            <img class="rounded" src="{{ asset('storage/GalleryImage/' . $image->gallery_image) }}"
                                width="100%"alt="">
                            <button onclick="deleteImage({{ $image->id }})" class="close-btn"><i
                                    class="fa fa-close"></i></button>
                        @else
                            <img class="rounded" src="{{ asset('User\assets\img\driver-dot-training.jpeg') }}"
                                width="100%"alt="">
                            <button class="close-btn"><i class="fa fa-close"></i></button>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload new image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.galleryUpload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <input type="file" name="gallery_image" class="form-control">
                            @if ($errors->has('gallery_image'))
                                <span class="text-danger">{{ $errors->first('gallery_image') }}</span>
                            @endif

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('galleryScript')
    <script>
        function deleteImage(image_id) {
            swal({
                    title: "Do you want to Delete this?",
                    icon: "warning",
                    text: "Please ensure and then confirm!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: !0
                }).then((willDelete) => {
                    if (willDelete.value) {
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('admin.galleryDelete') }}",
                            data: {
                                'image_id': image_id,
                                '_token': '{{ csrf_token() }}'
                            },
                            dataType: "json",
                            success: function(result) {
                                swal(result.msg);
                                // $("#gallery-section").load(window.location.href + "#gallery-section");
                                $('#gallery-section').load(' #gallery-section')
                            }
                        });
                    } else {
                        swal("Your data file is safe!");
                    }
                });

        }
    </script>
@endsection

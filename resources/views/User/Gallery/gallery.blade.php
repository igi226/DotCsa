@extends('User.Main.mainLayout')
@section('title', 'Gallery | Dotcsa')
@section('content')
<section>
    <div class="container">
        <div class="row m-4">
            @foreach ($gallery_images as $images)
            <div class="col-md-3 mb-3">
                @if (isset($images->gallery_image) && !empty($images->gallery_image) && File::exists(public_path('storage/GalleryImage/' . $images->gallery_image)))
                
                <img class="rounded" src="{{ asset('storage/GalleryImage/' . $images->gallery_image) }}" alt="">
                @else
                <img class="rounded" src="{{ asset('User\assets\img\driver-dot-training.jpeg') }}" alt="">
                @endif
            </div>    
            @endforeach
            
            
        </div>
    </div>
</section>
@endsection
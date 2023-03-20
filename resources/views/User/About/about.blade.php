@extends('User.Main.mainLayout')
@section('title', 'About-us | Dotcsa')
@section('content')

    <section id="inner_area_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner_banner_text">
                        <h2>About</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>&gt;</li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h3 class="text-center fw-bold">{{ $firstPortion->title }}</h3>
            <hr>
            <div class="text-center mb-4">
                <h3 class="mb-3">{{ $firstPortion->short_desc }}</h3>
                <p><?php echo html_entity_decode($firstPortion->description); ?></p>
            </div>
            <div class="service_wrapper_top pt-2">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="service-card shadow pt-4 h-100 mb-0">
                            @if (isset($secondPortion1->image) &&
                                    !empty($secondPortion1->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $secondPortion1->image)))
                                <img src="{{ asset('storage/CmsImage/' . $secondPortion1->image) }}">
                            @else
                                <img src="{{ asset('User/assets/img/police.jpg') }}">
                            @endif
                            <div class="service-caption">
                                <h3>{{ $secondPortion1->title }}</h3>
                                <p class="mb-0">{{ $secondPortion1->short_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="service-card shadow pt-4 h-100 mb-0">
                            @if (isset($secondPortion2->image) &&
                                    !empty($secondPortion2->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $secondPortion2->image)))
                                <img src="{{ asset('storage/CmsImage/' . $secondPortion2->image) }}">
                            @else
                                <img src="{{ asset('User/assets/img/usa-transport.png') }}">
                            @endif
                            <div class="service-caption">
                                <h3>{{ $secondPortion2->title }}</h3>
                                <p class="mb-0">{{ $secondPortion2->short_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="service-card shadow pt-4 h-100 mb-0">
                            @if (isset($secondPortion3->image) &&
                                    !empty($secondPortion3->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $secondPortion3->image)))
                                <img src="{{ asset('storage/CmsImage/' . $secondPortion3->image) }}">
                            @else
                                <img src="{{ asset('User/assets/img/trucklist.png') }}">
                            @endif
                            <div class="service-caption">
                                <h3>{{ $secondPortion3->title }}</h3>
                                <p class="mb-0">{{ $secondPortion3->short_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="service-card shadow pt-4 h-100 mb-0">
                            @if (isset($secondPortion4->image) &&
                                    !empty($secondPortion4->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $secondPortion4->image)))
                                <img src="{{ asset('storage/CmsImage/' . $secondPortion4->image) }}">
                            @else
                                <img src="{{ asset('User/assets/img/usa-pride.png') }}">
                            @endif
                            <div class="service-caption">
                                <h3>{{ $secondPortion4->title }}</h3>
                                <p class="mb-0">{{ $secondPortion4->short_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="service-card shadow pt-4 h-100 mb-0">
                            @if (isset($thirdPortion->image) &&
                                    !empty($thirdPortion->image) &&
                                    File::exists(public_path('storage/CmsImage/' . $thirdPortion->image)))
                                <img src="{{ asset('storage/CmsImage/' . $thirdPortion->image) }}">
                            @else
                                <img src="{{ asset('User/assets/img/professionals.png') }}">
                            @endif
                            <div class="service-caption">
                                <h3>{{$thirdPortion->title}}</h3>
                                <p class="mb-0"> <?php echo html_entity_decode($thirdPortion->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="Keywords" content="">
    <meta name="author" content="AnditThemes">

    <link rel="stylesheet" href="{{ asset('User/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/fontawesome.all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/color.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/responsive.css') }}" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('User/assets/img/favicon.png') }}" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'/> 

</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="loadertwo"></div>
        </div>
    </div>

    <header class="main-header header-style-one">
        <!-- Header Top -->
        <div class="header-top">
            <div class="top-left">
                <!-- Info List -->
                <ul class="list-style-one">
                    <li>DOTCSA Certified Determination Training <br> based on Fomer Govermment Investigators,
                        Auditors, and Inspectors</li>
                </ul>
            </div>

            <div class="top-right">
                <div class="top_bar_left_side">
                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span class="text-danger">Want to be a DOT Regulatory Professional <br> Register Here</span></button>
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-lower">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('User/assets/img/logo.png') }}"
                                alt="" title="Tronis"></a>
                    </div>
                </div>
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="{{ Route::currentRouteName() == 'index' ? 'current' : '' }}">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'aboutUs' ? 'current' : '' }}">
                                <a href="{{ route('aboutUs') }}">Mission</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'motorCarrierSupport' ? 'current' : '' }}">
                                <a href="{{ route('motorCarrierSupport') }}">Motor Carrier / Driver Support</a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'fieldTrainingEvents' ? 'current' : '' }}"><a href="{{ route('fieldTrainingEvents') }}">Field Training Events</a></li>
                            
                            <li class="dropdown {{ Route::currentRouteName() == 'DotSafetyTraining || businessAndYourTruck || DriversMotorCarriers' ? 'current' : '' }}"><a href="javascript:void(0)">Insurance DOT Training & Policy Coverage</a>
                            <ul>
                                <li  class="{{ Route::currentRouteName() == 'DotSafetyTraining' ? 'active' : '' }}"><a href="{{ route('DotSafetyTraining') }}">P&C Insurance Underwriting DOT Safety Training</a></li>
                                <li class="{{ Route::currentRouteName() == 'businessAndYourTruck' ? 'active' : '' }}"><a href="{{ route('businessAndYourTruck') }}">P&C Insurance Policy Sales for your business and your truck</a></li>
                                <li class="{{ Route::currentRouteName() == 'DriversMotorCarriers' ? 'active' : '' }}"><a href="{{ route('DriversMotorCarriers') }}">Life & Supplemental Insuarnce for Drivers & Motor Carriers</a></li>
                            </ul>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'expertWitness' ? 'current' : '' }}"><a href="{{ route('expertWitness') }}">DOT Regulatory and Law Enforcement Private Consultation</a></li>
                        </ul>
                    </nav>
                    <div class="outer-box">
                        <a href="tel:+1888-368-2721" class="btn btn-theme display-none-btn text-dark text-uppercase">
                            <span class="btn-title">Let's Talk</span>
                        </a>
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('User/images/logo-2.html') }}"
                                alt="" title="Fesho"></a>
                    </div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>

                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
            </nav>
        </div>

    </header>
    @yield('content')

    <!-- Footer Area Start -->
    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="footer_wedget">
                        <img src="{{ asset('User/assets/img/footerlogo.png') }}" alt="img">
                        <div class="footer_social_icon">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/dotcsa" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="footer_wedget footer_navigation">
                        <ul>
                            <li><a href="{{ route('aboutUs') }}">About</a></li>
                            <li><a href="{{ route('fieldTrainingEvents') }}">Field Training Events</a></li>
                            <li><a href="javascript:void(0)">Insurance Professionals</a></li>
                            <li><a href="{{ route('expertWitness') }}">Expert Witness</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div id="copy_right">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-area">
                        <p>Copyright © {{ date('Y') }} DOTCSA - All Rights Reserved. </p>
                        <strong class="fs-2 text-dark">*DOTCSA is not affiliated nor claims any association, partnership, or relationship with
                            any Federal or State DOT Government or Law Enforcement Agency. </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('registerRequest') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Contact Number:<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="recipient-name"
                                        name="contact_number">
                                    @if ($errors->has('contact_number'))
                                        <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Email:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Document, if any (optional)
                                        <code></code>:</label>
                                    <input type="file" class="form-control" id="recipient-name"
                                        name="profile_doc" accept=".doc, .docx, .pdf">
                                    @if ($errors->has('profile_doc'))
                                        <span class="text-danger">{{ $errors->first('profile_doc') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Address:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="address">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">City:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="city">
                                    @if ($errors->has('city'))
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">State:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="state">
                                    @if ($errors->has('state'))
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Zip code:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="recipient-name" name="zipcode">
                                    @if ($errors->has('zipcode'))
                                        <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <!-- Footer Area End -->
    <script src="{{ asset('User/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('User/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('User/assets/js/navbar.js') }}"></script>
    <script src="{{ asset('User/assets/js/video.js') }}"></script>
    <script src="{{ asset('User/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
   
    @if (Session::has('msg'))
        <script>
            setTimeout(function() {
                swal({
                    title: "Success!",

                    text: "{{ Session::get('msg') }}",

                    type: "success"

                }, function() {

                    location.reload

                });

            }, 1000);
        </script>
    @endif

    <script>
        $(window).on('load', function() {
            @error('email')
                $('#exampleModal').modal('show');
            @enderror

            @error('name')

                $('#exampleModal').modal('show');
            @enderror
            @error('contact_number')

                $('#exampleModal').modal('show');
            @enderror

            @error('address')

                $('#exampleModal').modal('show');
            @enderror

            @error('city')

                $('#exampleModal').modal('show');
            @enderror
            @error('state')

                $('#exampleModal').modal('show');
            @enderror
        });
    </script>



    <script>
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            // modalTitle.textContent = ''
            // modalBodyInput.value = recipient
        })
    </script>
</body>

</html>

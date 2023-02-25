<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('User\assets\img\favicon.png') }}" type="image/x-icon" />
    <title>ADMIN | DOTCSA</title>
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/main.css') }}" />
</head>

<body>

    <div class="overlay"></div>
    <main class="">
        <section class="signin-section">
            <div class="container-fluid">
                <div class="row g-0 auth-row justify-content-center">
                    <div class="col-lg-6">
                        <div class="signin-wrapper">
                            <div class="form-wrapper">
                                <img src="{{ asset('User\assets\img\logo.png') }}" width="347px" height="104px"
                                    alt="">
                                    @if(Session::has('msg'))
                                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                                    @endif
                                <form action="{{ route('admin.Postlogin') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label>Email</label>
                                                <input type="email" placeholder="Email" name="email"/>
                                                @if ($errors->has('email'))

                                        <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label>Password</label>
                                                <input type="password" placeholder="Password" name="password" />
                                                @if ($errors->has('password'))

                                        <span class="text-danger">{{ $errors->first('password') }}</span>

                                        @endif
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="button-group d-flex justify-content-center flex-wrap">
                                                <button class="main-btn primary-btn btn-hover w-100 text-center">
                                                    Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
</body>

</html>

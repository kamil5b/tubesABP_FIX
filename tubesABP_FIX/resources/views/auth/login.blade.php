<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TOUR.INC | Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/login/login.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/book.css') }}" rel="stylesheet" type="text/css">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    #formbox {
        width: 200px;
        padding: 0.5rem 0.5rem;
        border-radius: 1rem;
        border: 0.2rem solid rgb(210, 210, 210);
        font-size: 1.4rem;
        text-transform: none;
        background: none;
    }

    #container {
        margin: auto;
        padding: 30px;
        background-color: white;
        border-radius: 2rem;
    }

    h1 {
        font-size: 2.5rem;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>


<body class="text-center" style="background-color:rgb(210, 210, 210);">



    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="/" class="logo">

            <!-- LOGO -->
            <img src="images/logo_tourinc.PNG" width="30" height="30" align="center">
            TOUR.INC
        </a>



    </header>

    <!-- header section ends -->

    <main class="form-signin">
        {{-- <div class="card-header">{{ __('Login') }}</div> --}}

        <form method="POST" id="container" action="{{ route('login') }}" style="align-items: center;">
            {{ csrf_field() }}
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            <h1 class="h3 mb-3 fw-normal" style="color: rgb(80, 80, 80);">Login</h1>
            <br>




            <!-- FORM -->
            <div class="formbox">
                <input type="email" id="formbox" name='email' class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput"></label>
            </div>
            <br>

            <div class="formbox">
                <input type="password" id="formbox" name='password' class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword"></label>
            </div>

            <div class="checkbox mb-3">

                <label style="color: #128159;">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>

            </div>

            @yield('testaja')



            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <br>
                    <br>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="color: #128159;">
                        {{ __('Forgot Password?') }}
                    </a>
                    @endif

                    <br>
                    <p style="color: rgb(80, 80, 80);">
                        Not having an account yet?
                        <a href="/register" style="color: #128159;"> Register </a>


                    </p>




                </div>
            </div>

            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>

        </div>
    </main>








    {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
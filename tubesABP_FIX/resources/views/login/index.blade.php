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
        <form action="{{url('post-login')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            {{-- <h1 class="h3 mb-3 fw-normal" style="color: #ffff;">Login</h1> --}}
            <br>




            <!-- FORM -->
            <div class="formbox">
                <input type="email" name='email' class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>


            <div class="formbox">
                <input type="password" name='password' class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">

                <label style="color: #128159;">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>

            </div>




            @yield('testaja')



            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <br>
            <br>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>



</body>

</html>
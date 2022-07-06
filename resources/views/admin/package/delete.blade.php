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
    <link href="{{ asset('/css/admin/header.css') }}" rel="stylesheet" type="text/css">
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

    body {
        margin: auto;
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

    label {
        color: rgb(80, 80, 80);
        font-size: 1.2rem;
    }

    #reg {
        color: rgb(80, 80, 80);
        font-size: 2.5rem;
        font-weight: bold;

    }

    .container {
        margin: auto;
        padding: 30px;
        background-color: white;
        border-radius: 2rem;
    }
    </style>



    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>


<body class="text-center" style="background-color:rgb(210, 210, 210);" border="2px black solid">


    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="/admin" class="logo">

            <!-- LOGO -->
            <img src="../../images/logo_tourinc_white.PNG" width="30" height="30" align="center">
            TOUR.INC
        </a>



    </header>

    <body class="text-center" style="background-color:rgb(210, 210, 210);">
        <div class="container" style="margin: auto;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" id="reg">{{ __('Delete Package') }}</div>
                        <br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf


                                <form action="/action_page.php">
                                    <label for="cars">Choose Destination:</label>
                                    <br>
                                    <select id="cars" name="cars">
                                        <option value="bali">Bali</option>
                                        <option value="lbj">Labuan Bajo</option>
                                        <option value="ampat">Raja Ampat</option>

                                    </select>

                                </form>

                                <br>

                                <form action="/action_page.php">
                                    <label for="package"> To Delete</label>
                                    <label for="package">Choose a Package:</label>
                                    <br>
                                    <select id="cars" name="cars">
                                        <option value="bali">pack 1</option>
                                        <option value="lbj">pack 2</option>
                                        <option value="ampat">pack 3</option>

                                    </select>

                                </form>



                                <!-- BUTTON -->
                                <br>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Delete') }}
                                        </button>
                                    </div>
                                </div>






                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
        </script>

    </body>



</html>
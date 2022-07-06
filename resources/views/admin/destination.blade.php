<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR.INC | INC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS  -->
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/admin/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/home/home.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('../css/home/destination.css') }}" rel="stylesheet" type="text/css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JS  -->
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

</head>



<body style="background-color: black;">

    <!-- HEADER  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="/admin" class="logo">

            <!-- LOGO -->
            <img src="../images/logo_tourinc_white.PNG" width="30" height="30" align="center">
            TOUR.INC
        </a>







        <!-- LOGIN BUTTON -->
        @if(Auth::check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a data-aos="zoom-in-right" data-aos-delay="1300" href="{{ route('logout') }}" action="{{ route('logout') }}"
            method="POST" class="btn" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        @else

        <a data-aos="zoom-in-left" data-aos-delay="1300" href="/" class="btn">
            Logout
        </a>

        @endif

    </header>

    <!-- HEADER END -->


    <br>
    <br>
    <br>



    <!-- DESTINATION  -->

    <section class="destination" id="destination" style="background-color: rgb(210,210,210);">

        <div class="heading">
            <h1>our destination</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="../images/bali.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Bali</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="../images/lombok.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Lombok</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="../images/rajaampat.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Raja Ampat</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img src="../images/pseribu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pulau Seribu</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="750">
                <div class="image">
                    <img src="../images/lbj3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Labuan Bajo</h3>

                    <a href="/price">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="900">
                <div class="image">
                    <img src="../images/nongsa.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nongsa</h3>

                    <a href="#">find tour <i class="fas fa-angle-right"></i></a>
                </div>
            </div>



        </div>

    </section>

    <!-- DESTINATION END -->


    <br>


    <!-- BUTTON ADD & DELETE -->

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/admin/destination/add" class="btn btn-primary" id="center">
                {{ __('Add') }}
            </a>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <a href="/admin/destination/delete" class="btn btn-primary" id="center">
                {{ __('Delete') }}
            </a>
        </div>
    </div>
    <br>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>

</body>

</html>
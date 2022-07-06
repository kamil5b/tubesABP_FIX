<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR.INC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- FILE CSS  -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/css/home/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/credits.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/css/package/pricing.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/home/destination.css') }}" rel="stylesheet" type="text/css">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- JS  -->
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>




</head>


<style>
::placeholder {
    color: white;
}
</style>


<body>

    <!-- NAVBAR -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="/" class="logo">

            <!-- LOGO -->
            <img src="images/logo_tourinc.PNG" width="30" height="30" align="center">
            TOUR.INC
        </a>

        <nav class="navbar">
            <a data-aos="zoom-in-left" data-aos-delay="300" href="/">home</a>
            <a data-aos="zoom-in-left" data-aos-delay="450" href="/#about">about</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="/#destination">destination</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="/#services">services</a>
        </nav>


        <!-- LOGIN BUTTON -->
        <a data-aos="zoom-in-left" data-aos-delay="1300" href="/login" class="btn">
            Login
        </a>

    </header>

    <!-- NAVBAR END -->

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- BAGIAN APAPUN ITU -->
    @yield('price')
    @yield('package')
    @yield('priceCOBA')












    <br>
    <br>
    <br>
    <br>
    <br>




    <!-- FOOTER-->


    <section class="footer" style="background: rgb(202, 202, 202);">

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <a href="#" class="logo">
                    <img src="images/logo_tourinc.PNG" width="30" height="30" align="center">

                    TOUR.INC
                </a>
                <p>provides happiness through</p>
                <p>the wind and sea</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <h3>quick links</h3>
                <a href="/" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="/#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="/#destination" class="links"> <i class="fas fa-arrow-right"></i> destination </a>
                <a href="/#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <h3>contact info</h3>
                <p> <i class="fas fa-map"></i> Jakarta, Indonesia </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-envelope"></i> tourinc@gmail.com </p>
                <p> <i class="fas fa-clock"></i> 9:00am - 10:00pm </p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" name="" placeholder="enter your email" class="email" id="">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

    </section>

    <div class="credit">created by <span>Paketan</span> | Tour.Inc</div>

    <!-- FOOTER END -->

















    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        offset: 150,
    });
    </script>

</body>

</html>